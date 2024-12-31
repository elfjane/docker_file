<?php
$api = array();

$api[0]['item_url']        = "hi";
$api[0]['item_type']       = "GET";
$api[0]['item_title'] = "測試連線";
$api[0]['item_help']  = "測試連線";
$api[0]['parameter_list'] = array();

$api[1]['item_url']        = "websh?key=payment_create&is_debug=1";
$api[1]['item_type']       = "GET";
$api[1]['item_title'] = "payment更新(全部)";
$api[1]['item_help']  = "payment更新";
$api[1]['parameter_list'] = array();

$api[2]['item_url']        = "websh?key=payment_clear_cache&is_debug=1";
$api[2]['item_type']       = "GET";
$api[2]['item_title'] = "payment更新(clear cache)";
$api[2]['item_help']  = "payment更新(clear cache)";
$api[2]['parameter_list'] = array();

$api[3]['item_url']        = "websh?key=payment_composer_install&is_debug=1";
$api[3]['item_type']       = "GET";
$api[3]['item_title'] = "payment composer install";
$api[3]['item_help']  = "payment composer install)";
$api[3]['parameter_list'] = array();

$api[4]['item_url']        = "websh?key=payment_code_reset&is_debug=1";
$api[4]['item_type']       = "GET";
$api[4]['item_title'] = "payment更新(還原)";
$api[4]['item_help']  = "payment更新(還原)";
$api[4]['parameter_list'] = array('branch');

$api[5]['item_url']        = "websh?key=login_code_reset&is_debug=1";
$api[5]['item_type']       = "GET";
$api[5]['item_title'] = "login 更新(還原)";
$api[5]['item_help']  = "login 更新(還原)";
$api[5]['parameter_list'] = array('branch');
