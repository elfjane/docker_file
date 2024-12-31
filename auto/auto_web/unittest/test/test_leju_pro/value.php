<?php
$value = array();
$value['order_number']['name']     = "order_number";
$value['order_number']['val']      = "S202300457";
$value['order_number']['type']     = "string";
$value['order_number']['help']     = "樂居訂單編號";

$value['prime']['name']     = "prime";
$value['prime']['val']      = "c10267ddde091b64e1c49d253ab061934397a2abc8a3a23c281e8f159a69c5a0";
$value['prime']['type']     = "string";
$value['prime']['help']     = "taypay prime";

$value['name']['name']     = "name";
$value['name']['val']      = "王小明";
$value['name']['type']     = "string";
$value['name']['help']     = "用卡號所換得的字串由 createToken 成功時回傳";

$value['phone_number']['name']     = "phone_number";
$value['phone_number']['val']      = "+886923456789";
$value['phone_number']['type']     = "string";
$value['phone_number']['help']     = "綁定者電話號碼";

$value['email']['name']     = "email";
$value['email']['val']      = "LittleMing@Wang.com";
$value['email']['type']     = "string";
$value['email']['help']     = "綁定者電話號碼";

$value['zip_code']['name']     = "zip_code";
$value['zip_code']['val']      = "100";
$value['zip_code']['type']     = "string";
$value['zip_code']['help']     = "綁定者郵遞區號";

$value['address']['name']     = "address";
$value['address']['val']      = "100";
$value['address']['type']     = "string";
$value['address']['help']     = "綁定者地址";

$value['national_id']['name']     = "national_id";
$value['national_id']['val']      = "100";
$value['national_id']['type']     = "string";
$value['national_id']['help']     = "綁定者身份證字號";

$value['uid']['name']     = "uid";
$value['uid']['val']      = "19910202";
$value['uid']['type']     = "string";
$value['uid']['help']     = "購買人會員id";


$value['is_test']['name']     = "is_test";
$value['is_test']['val']      = "0";
$value['is_test']['type']     = "int";
$value['is_test']['help']     = "帶入 --testdox";

$value['is_debug']['name']     = "is_debug";
$value['is_debug']['val']      = "1";
$value['is_debug']['type']     = "string";
$value['is_debug']['help']     = "顯示除錯訊息";

$value['is_hide_message']['name']     = "is_hide_message";
$value['is_hide_message']['val']      = "0";
$value['is_hide_message']['type']     = "int";
$value['is_hide_message']['help']     = "隱藏訊息";

$value['test_user']['name']     = "test_user";
$value['test_user']['val']      = "elfjane";
$value['test_user']['type']     = "測試者名稱";
$value['test_user']['help']     = "測試者名稱";

$value['order_id']['name']     = "order_id";
$value['order_id']['val']      = "1";
$value['order_id']['type']     = "訂單編號";
$value['order_id']['help']     = "訂單編號";

$value['buyer']['name']     = "buyer";
$value['buyer']['val']      = "王大明";
$value['buyer']['type']     = "買受人名稱";
$value['buyer']['help']     = "買受人名稱";

$value['price']['name']     = "price";
$value['price']['val']      = "3000";
$value['price']['type']     = "訂單金額";
$value['price']['help']     = "訂單金額";

$value['account_num']['name']     = "account_num";
$value['account_num']['val']      = "10";
$value['account_num']['type']     = "帳號數";
$value['account_num']['help']     = "帳號數";

$value['start_date']['name']     = "start_date";
$value['start_date']['val']      = "2023-06-01";
$value['start_date']['type']     = "走期開始";
$value['start_date']['help']     = "走期開始";

$value['end_date']['name']     = "end_date";
$value['end_date']['val']      = "2023-07-01";
$value['end_date']['type']     = "走期結束";
$value['end_date']['help']     = "走期結束";

$value['modify_by']['name']     = "modify_by";
$value['modify_by']['val']      = "1234";
$value['modify_by']['type']     = "後台人工 ID";
$value['modify_by']['help']     = "後台人工 ID";

$value['source']['name']     = "source";
$value['source']['val']      = "後台、金流";
$value['source']['type']     = "來源";
$value['source']['help']     = "來源";

$value['note']['name']     = "note";
$value['note']['val']      = "測試";
$value['note']['type']     = "備註";
$value['note']['help']     = "備註";

$value['bodies']['name']     = "note";
$value['bodies']['val']      = <<<'EOD'
[
    {
      "body_id": 1,
      "group_id": 1,
      "uid": 1111,
      "name": "王小明",
      "cellphone": "0910654321"
    },
    {
      "body_id": 2,
      "group_id": 2,
      "uid": 1234,
      "name": "王大明",
      "cellphone": "0910123456"
    }
  ]
EOD;
$value['bodies']['type']     = "備註";
$value['bodies']['help']     = "備註";

?>