<?php
$api = array();

$api[0]['item_url']       = "api/payment/expert/refundDetailPayment";
$api[0]['item_type']      = "POST";
$api[0]['item_title']     = "api/payment/expert/refundDetailPayment";
$api[0]['item_help']      = "api/payment/expert/refundDetailPayment";
$api[0]['parameter_list'] = array('order_number');

$api[1]['item_url']       = "api/payment/expert/refundPayment";
$api[1]['item_type']      = "POST";
$api[1]['item_title']     = "api/payment/expert/refundPayment";
$api[1]['item_help']      = "api/payment/expert/refundPayment";
$api[1]['parameter_list'] = array('order_number', 'amount', 'bank_refund_id');

$api[2]['item_url']       = "api/payment/expert/tayPayBindCard";
$api[2]['item_type']      = "POST";
$api[2]['item_title']     = "api/payment/expert/tayPayBindCard";
$api[2]['item_help']      = "api/payment/expert/tayPayBindCard";
$api[2]['parameter_list'] = array('uid', 'prime', 'name', 'phone_number', 'email');


