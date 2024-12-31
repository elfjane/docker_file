<?php
require_once('config.php');
require_once('function.php');

$doc_folder = CRON_DOC_FOLDER;
if (isset($_REQUEST['doc'])) {
    $doc_folder = $_REQUEST['doc'];
}

// 載入檔案
try 
{
    $doc_root = CRON_DOC_ROOT. '/' . $doc_folder ;

    if (!file_exists($doc_root)) {
        throw new Exception("before create doc_folder = ${doc_root}", 300); 
    }

    // 檢查根目錄是否存在
    $doc_filename = "{$doc_root}/{$doc_folder}_index.yml";
    if (!file_exists($doc_filename)) {
        throw new Exception("before create doc_filename = ${doc_filename}", 400); 
    }

    // 檢查根目錄 doc是否存在
    $doc_root_docs = $doc_root . '/' . CRON_DOC_ROOT_YML;
    $isLoadDocs = false;
    if (file_exists($doc_root_docs)) {
        $isLoadDocs = true;
    }

    $yaml = file_get_contents($doc_filename);
    echo $yaml;

    if ($isLoadDocs) {
        $ret_load_file = dirToArray2($doc_root_docs);
        $load_files = dirToArrayChange($ret_load_file, $doc_root_docs . '/');

        foreach($load_files as $row)
        {
            $ymlFilename = $doc_root_docs . '/' . $row;

            if (!file_exists($ymlFilename)) {
                throw new Exception("can't find yml filename = ${ymlFilename}", 600); 
            }
            $yml = file_get_contents($ymlFilename);
            echo $yml;
        }
    }
} catch (Exception $e) {
    $code = $e->getCode();
    $message = $e->getMessage();
    echo "openapi: 3.0.0\r\n";
    echo "info:\r\n";
    echo "  version: 1.0.0\r\n";

    $errorTitle = sprintf("  title: error (%d)\r\n", $code);
    echo $errorTitle;
    $errorDescription = sprintf("  description: |-\r\n    %s", $message);
    echo $errorDescription;
}
?>