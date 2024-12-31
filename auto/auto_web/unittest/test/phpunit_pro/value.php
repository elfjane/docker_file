<?php
$value = array();
$value['is_debug']['name']     = "is_debug";
$value['is_debug']['val']      = "1";
$value['is_debug']['type']     = "string";
$value['is_debug']['help']     = "顯示除錯訊息";

$value['is_hide_message']['name']     = "is_hide_message";
$value['is_hide_message']['val']      = "0";
$value['is_hide_message']['type']     = "int";
$value['is_hide_message']['help']     = "隱藏訊息";


$value['branch']['name']     = "branch";
$value['branch']['val']      = "master";
$value['branch']['type']     = "STRING";
$value['branch']['help']     = "branch";

$value['is_test']['name']     = "is_test";
$value['is_test']['val']      = "0";
$value['is_test']['type']     = "int";
$value['is_test']['help']     = "帶入 --testdox";

$value['category']['name']     = "category";
$value['category']['val']      = "api";
$value['category']['type']     = "類別";
$value['category']['help']     = "後端程式碼類別(task, api, payment)";

$value['filter']['name']     = "filter";
$value['filter']['val']      = "ExpertPaymentTapPayTest";
$value['filter']['type']     = "phpunit filter";
$value['filter']['help']     = "phpunit filter";

$value['func']['name']     = "func";
$value['func']['val']      = "payObjectList測試";
$value['func']['type']     = "phpunit filter::func";
$value['func']['help']     = "phpunit filter::func";

$value['test_user']['name']     = "test_user";
$value['test_user']['val']      = "elfjane";
$value['test_user']['type']     = "測試者名稱";
$value['test_user']['help']     = "測試者名稱";

$value['coverage_min']['name']     = "coverage_min";
$value['coverage_min']['val']      = "90";
$value['coverage_min']['type']     = "int";
$value['coverage_min']['help']     = "覆蓋率百分比";

$value['i_color']['name']     = "i_color";
$value['i_color']['val']      = "1";
$value['i_color']['type']     = "int";
$value['i_color']['help']     = "shell 顏色轉換";
?>