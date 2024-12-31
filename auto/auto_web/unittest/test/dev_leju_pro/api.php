<?php
$api = array();

$api[0]['item_url']       = "api/payment/expert/refundDetailPayment?order_number=12312";
$api[0]['item_type']      = "GET";
$api[0]['item_title']     = "退款明細";
$api[0]['item_help']      = "api/payment/expert/refundDetailPayment";
$api[0]['parameter_list'] = array('order_number');

$api[1]['item_url']       = "api/payment/expert/refundPayment";
$api[1]['item_type']      = "POST";
$api[1]['item_title']     = "退款";
$api[1]['item_help']      = "api/payment/expert/refundPayment";
$api[1]['parameter_list'] = array('order_number', 'amount', 'bank_refund_id');

$api[2]['item_url']       = "api/payment/expert/tapPayBindCard";
$api[2]['item_type']      = "POST";
$api[2]['item_title']     = "TapPay - 綁定信用卡";
$api[2]['item_help']      = "api/payment/expert/tayPayBindCard";
$api[2]['parameter_list'] = array('uid', 'prime', 'name', 'phone_number', 'email');

$api[3]['item_url']         = "api/payment/expert/tapPayBindCardList";
$api[3]['item_type']        = "GET";
$api[3]['item_title']       = "信用卡綁定列表";
$api[3]['item_help']        = "信用卡綁定列表";
$api[3]['parameter_header'] = array();
$api[3]['parameter_uri']    = array('uid');
$api[3]['parameter_list']   = array();


