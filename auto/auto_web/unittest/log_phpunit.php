<?php
require_once('config.php');
require_once('function.php');


$dir = CRON_DIR_LOG_PHPUNIT;
$ret_load_file = dirToArray2($dir);

$load_file = dirToArrayChange($ret_load_file, $dir . '/');

$api_type = 'leju_backend';
if (isset($_REQUEST['api_type'])) {
    $api_type = $_REQUEST['api_type'];
}

// 載入檔案
$filename = 'test/' . $api_type . '/config.php';
if (file_exists($filename)) {
    require_once('test/' . $api_type . '/config.php');
}

$i_send_url = CRON_WEB_URL . 'websh?key=phpunit_read_log&is_debug=1';
//$api_type_list = get_api_type();
//$input_list = json_encode($html);
include 'tpl/log_phpunit.tpl.php';
//include 'tpl/unittest3.tpl.php';
?>