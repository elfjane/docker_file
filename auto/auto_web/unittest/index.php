<?php
require_once('config.php');
require_once('function.php');
require_once('function_html.php');


$api_type = 'leju_backend';
if (isset($_REQUEST['api_type'])) {
    $api_type = $_REQUEST['api_type'];
}
$filename = 'test/' . $api_type . '/config.php';
$html = array();
if (file_exists($filename)) {
    require_once('test/' . $api_type . '/config.php');
    $inputs = make_inputs($api_type);
    if (isset($_REQUEST['url'])) {
        $url = $_REQUEST['url'];
    } else {
        $url = CRON_WEB_URL;
    }

    $html = make_html($inputs, $url);

}


$api_type_list = get_api_type();
//$input_list = json_encode($html);

$tpl = 'unittest_adv';
if (!empty($_GET['tpl'])) {
    //include 'tpl/unittest_adv.tpl.php';
    //include 'tpl/unittest_' . $_GET['tpl'] . '.tpl.php';
    $tpl = $_GET['tpl'];
}

// 刪除 範例程式碼
$tpl_delete = 0;
if (!empty($_GET['tpl_del'])) {
    $tpl_delete = $_GET['tpl_del'];
}

include 'tpl/'.$tpl.'.tpl.php';

//include 'tpl/unittest3.tpl.php';
?>