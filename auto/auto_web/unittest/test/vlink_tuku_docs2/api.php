<?php
$api = array();

$api[0]['item_url']        = "hi";
$api[0]['item_type']       = "GET";
$api[0]['item_title']      = "測試連線";
$api[0]['item_help']       = "測試連線";
$api[0]['parameter_list']  = array();

$api[1]['item_url']        = "websh?key=backend_create&is_debug=1";
$api[1]['item_type']       = "GET";
$api[1]['item_title'] = "後台更新(全部)";
$api[1]['item_help']  = "後台更新";
$api[1]['parameter_list'] = array();

$api[2]['item_url']        = "websh?key=backend_clear_cache&is_debug=1";
$api[2]['item_type']       = "GET";
$api[2]['item_title'] = "後台更新(clear cache)";
$api[2]['item_help']  = "後台更新(clear cache)";
$api[2]['parameter_list'] = array();

$api[3]['item_url']        = "websh?key=backend_composer_install&is_debug=1";
$api[3]['item_type']       = "GET";
$api[3]['item_title'] = "後台composer install";
$api[3]['item_help']  = "後台composer install)";
$api[3]['parameter_list'] = array();

$api[4]['item_url']        = "websh?key=backend_code_reset&is_debug=1";
$api[4]['item_type']       = "GET";
$api[4]['item_title'] = "後台更新(還原)";
$api[4]['item_help']  = "後台更新(還原)";
$api[4]['parameter_list'] = array();


$api[5]['item_url']        = "websh?key=leju_create&is_debug=1";
$api[5]['item_type']       = "GET";
$api[5]['item_title'] = "leju lib更新(全部)";
$api[5]['item_help']  = "leju lib更新";
$api[5]['parameter_list'] = array();

$api[6]['item_url']        = "websh?key=leju_clear_cache&is_debug=1";
$api[6]['item_type']       = "GET";
$api[6]['item_title'] = "leju lib更新(clear cache)";
$api[6]['item_help']  = "leju lib更新(clear cache)";
$api[6]['parameter_list'] = array();

$api[7]['item_url']        = "websh?key=leju_composer_install&is_debug=1";
$api[7]['item_type']       = "GET";
$api[7]['item_title'] = "leju lib composer install";
$api[7]['item_help']  = "leju lib composer install)";
$api[7]['parameter_list'] = array();

$api[8]['item_url']        = "websh?key=leju_code_reset&is_debug=1";
$api[8]['item_type']       = "GET";
$api[8]['item_title'] = "leju lib更新(還原)";
$api[8]['item_help']  = "leju lib更新(還原)";
$api[8]['parameter_list'] = array();


$api[9]['item_url']        = "websh?key=task_create&is_debug=1";
$api[9]['item_type']       = "GET";
$api[9]['item_title'] = "Task 更新(全部)";
$api[9]['item_help']  = "Task更新";
$api[9]['parameter_list'] = array();

$api[10]['item_url']        = "websh?key=task_clear_cache&is_debug=1";
$api[10]['item_type']       = "GET";
$api[10]['item_title'] = "Task更新(clear cache)";
$api[10]['item_help']  = "Task更新(clear cache)";
$api[10]['parameter_list'] = array();

$api[11]['item_url']        = "websh?key=task_composer_install&is_debug=1";
$api[11]['item_type']       = "GET";
$api[11]['item_title'] = "Task composer install";
$api[11]['item_help']  = "Task composer install)";
$api[11]['parameter_list'] = array();

$api[12]['item_url']        = "websh?key=task_code_reset&is_debug=1";
$api[12]['item_type']       = "GET";
$api[12]['item_title'] = "Task更新(還原)";
$api[12]['item_help']  = "Task更新(還原)";
$api[12]['parameter_list'] = array('branch');

$api[13]['item_url']        = "websh?key=test/name_test&is_debug=1";
$api[13]['item_type']       = "GET";
$api[13]['item_title'] = "傳參數測試";
$api[13]['item_help']  = "傳參數測試";
$api[13]['parameter_list'] = array('branch');
