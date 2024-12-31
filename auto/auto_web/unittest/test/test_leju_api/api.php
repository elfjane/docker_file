<?php
$api = array();

$api[0]['item_url']         = "api/expert/order/payment/refundDetail";
$api[0]['item_type']        = "GET";
$api[0]['item_title']       = "退款明細";
$api[0]['item_help']        = "退款明細";
$api[0]['parameter_header'] = array('sessionToken');
$api[0]['parameter_uri']    = array('order_number');
$api[0]['parameter_list']   = array();

$api[1]['item_url']         = "api/expert/order/payment/bindCard";
$api[1]['item_type']        = "POST";
$api[1]['item_title']       = "信用卡 - 新增綁定";
$api[1]['item_help']        = "信用卡 - 新增綁定";
$api[1]['parameter_header'] = array('sessionToken');
$api[1]['parameter_uri']    = array();
$api[1]['parameter_list']   = array('prime', 'name', 'phone_number', 'email');

$api[2]['item_url']         = "api/expert/order/payment/bindCardList";
$api[2]['item_type']        = "GET";
$api[2]['item_title']       = "信用卡 - 綁定列表";
$api[2]['item_help']        = "信用卡 - 綁定列表";
$api[2]['parameter_header'] = array('sessionToken');
$api[2]['parameter_uri']    = array();
$api[2]['parameter_list']   = array();

$api[3]['item_url']         = "api/expert/businessNoInformation";
$api[3]['item_type']        = "POST";
$api[3]['item_title']       = "功能 - 工商平台 檢查 API";
$api[3]['item_help']        = "功能 - 工商平台 檢查 API";
$api[3]['parameter_header'] = array('sessionToken');
$api[3]['parameter_uri']    = array();
$api[3]['parameter_list']   = array('business_no');

$api[4]['item_url']         = "api/enterprise/expert/auth/login";
$api[4]['item_type']        = "POST";
$api[4]['item_title']       = "樂居登入 - 樂居會員登入";
$api[4]['item_help']        = "樂居登入 - 樂居會員登入";
$api[4]['parameter_header'] = array();
$api[4]['parameter_uri']    = array();
$api[4]['parameter_list']   = array('username', 'password');

$api[5]['item_url']         = "api/enterprise/search/cityOption";
$api[5]['item_type']        = "GET";
$api[5]['item_title']       = "樂居企業管理平台-縣市下拉選單";
$api[5]['item_help']        = "樂居企業管理平台-縣市下拉選單";
$api[5]['parameter_header'] = array('authorization');
$api[5]['parameter_uri']    = array();
$api[5]['parameter_list']   = array();

$api[6]['item_url']         = "api/enterprise/search/areaOption";
$api[6]['item_type']        = "GET";
$api[6]['item_title']       = "樂居企業管理平台-行政區下拉選單";
$api[6]['item_help']        = "樂居企業管理平台-行政區下拉選單";
$api[6]['parameter_header'] = array('authorization');
$api[6]['parameter_uri']    = array('city_code');
$api[6]['parameter_list']   = array();

$api[7]['item_url']         = "api/enterprise/objectList";
$api[7]['item_type']        = "POST";
$api[7]['item_title']       = "企業管理平台-社區管理列表";
$api[7]['item_help']        = "企業管理平台-社區管理列表";
$api[7]['parameter_header'] = array('authorization');
$api[7]['parameter_uri']    = array();
$api[7]['parameter_list']   = array('city_code', 'post_code', 'object_title', 'no_host_only', 'page', 'per_page');

$api[8]['item_url']         = "api/enterprise/expert/maintainerList";
$api[8]['item_type']        = "GET";
$api[8]['item_title']       = "企業管理平台-test";
$api[8]['item_help']        = "企業管理平台-test";
$api[8]['parameter_header'] = array('authorization');
$api[8]['parameter_uri']    = array();
$api[8]['parameter_list']   = array('city_code', 'post_code', 'object_title', 'no_host_only', 'page', 'per_page');