<?php
$value = array();
$value['is_debug']['name']     = "is_debug";
$value['is_debug']['val']      = "1";
$value['is_debug']['type']     = "string";
$value['is_debug']['help']     = "顯示除錯訊息";

$value['wan_jia']['name']     = "wan_jia";
$value['wan_jia']['val']      = "1532242076819918848";
$value['wan_jia']['type']     = "bigint";
$value['wan_jia']['help']     = "user_id";

$value['type']['name']     = "类别";
$value['type']['val']      = "NOTIFICATION";
$value['type']['type']     = "ANNOUNCEMENT|NOTIFICATION";
$value['type']['help']     = "类别";

$value['format']['name']     = "格式";
$value['format']['val']      = "PLAIN_TEXT";
$value['format']['type']     = "PLAIN_TEXT|RICH_TEXT";
$value['format']['help']     = "格式";

$value['audience']['name']     = "受众";
$value['audience']['val']      = "SPECIFIC";
$value['audience']['type']     = "ALL|SPECIFIC";
$value['audience']['help']     = "受众";

$value['subject']['name']     = "标题";
$value['subject']['val']      = "test";
$value['subject']['type']     = "string";
$value['subject']['help']     = "标题";

$value['description']['name']     = "description";
$value['description']['val']      = "test";
$value['description']['type']     = "string";
$value['description']['help']     = "description";

$value['ordinal']['name']     = "序数(預設 32767)";
$value['ordinal']['val']      = "3";
$value['ordinal']['type']     = "int";
$value['ordinal']['help']     = "短整數 1 ~ 32767";

$value['since']['name']     = "开始";
$value['since']['val']      = "2022-11-11T20:22:22";
$value['since']['type']     = "datetime";
$value['since']['help']     = "字串 yyyy-MM-ddTHH:mm:ss";

$value['until']['name']     = "结束";
$value['until']['val']      = "2022-11-12T20:22:22";
$value['until']['type']     = "datetime";
$value['until']['help']     = "字串 yyyy-MM-ddTHH:mm:ss";

$value['initiator']['name']     = "发起";
$value['initiator']['val']      = "elfjane";
$value['initiator']['type']     = "string";
$value['initiator']['help']     = "发起";

$value['origin']['name']     = "来源";
$value['origin']['val']      = "elfjane origin";
$value['origin']['type']     = "string";
$value['origin']['help']     = "来源";

$value['originComment']['name']     = "来源备注";
$value['originComment']['val']      = "elfjane originComment";
$value['originComment']['type']     = "string";
$value['originComment']['help']     = "来源备注";

$value['recipient']['name']     = "来源";
$value['recipient']['val']      = "2121524417";
$value['recipient']['type']     = "int array";
$value['recipient']['help']     = "收件人(零或多個)";

$value['mailId']['name']     = "mailId";
$value['mailId']['val']      = "256114815615895446";
$value['mailId']['type']     = "int";
$value['mailId']['help']     = "郵件的雪花 id";

$value['bi_bie']['name']     = "幣別";
$value['bi_bie']['val']      = "COIN";
$value['bi_bie']['type']     = "string";
$value['bi_bie']['help']     = "COIN|CRYSTAL|GEM|TOKEN|GTOKEN|FIAT";

$value['shi_you']['name']     = "事由";
$value['shi_you']['val']      = "NEWBIE_GIFT";
$value['shi_you']['type']     = "string";
$value['shi_you']['help']     = "NEWBIE_GIFT<BR>DEATH_MATCH<BR>CASUAL_MATCH<BR>TOURNAMENT<BR>IN_APP_PURCHASE<BR>DELAYED_PVP<BR>LADDER<BR>MAILBOX<BR>PREP_MATCH";

$value['in_limit']['name']     = "回傳資料筆數上限";
$value['in_limit']['val']      = "20";
$value['in_limit']['type']     = "numeric";
$value['in_limit']['help']     = "資料回傳時，顯示回傳最高上限筆數";

$value['in_offset']['name']     = "回傳頁數";
$value['in_offset']['val']      = "0";
$value['in_offset']['type']     = "numeric";
$value['in_offset']['help']     = "資料回傳時，顯示回傳頁數設定";

$value['es_index']['name']     = "elasticsearch index";
$value['es_index']['val']      = "audit-trail-log";
$value['es_index']['type']     = "string";
$value['es_index']['help']     = "elasticsearch index";

$value['es_body']['name']     = "elasticsearch body";
$value['es_body']['val']      = '{
  "query": {
    "query_string": {
      "query": "*"
    }
  }
}';
$value['es_body']['type']     = "json";
$value['es_body']['help']     = "elasticsearch body";

$value['start_at']['name']     = "開始時間";
$value['start_at']['val']      = "2022-12-26 00:00:00";
$value['start_at']['type']     = "datetime (yyyy-MM-dd HH:mm:ss)";
$value['start_at']['help']     = "start_at" ;

$value['end_at']['name']     = "結束時間";
$value['end_at']['val']      = "2022-12-26 01:59:59";
$value['end_at']['type']     = "datetime (yyyy-MM-dd HH:mm:ss)";
$value['end_at']['help']     = "end_at" ;

$value['income_total_sum']['name']     = "income_total_sum";
$value['income_total_sum']['val']      = "50.1";
$value['income_total_sum']['type']     = "float";
$value['income_total_sum']['help']     = "平台總營收";

$value['in_page']['name']     = "頁數";
$value['in_page']['val']      = "1";
$value['in_page']['type']     = "numeric";
$value['in_page']['help']     = "資料回傳時，顯示回傳頁數設定";

$value['payment_type']['name']     = "交易項目";
$value['payment_type']['val']      = "GOOGLE";
$value['payment_type']['type']     = "STRING";
$value['payment_type']['help']     = "查詢充值來源";

?>