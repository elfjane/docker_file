<?php
require_once('function.php');
echo __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/vendor/autoload.php';

use SensioLabs\AnsiConverter\AnsiToHtmlConverter;

$converter = new AnsiToHtmlConverter();
$dataType = array();
$list = array();





$data = array();

foreach ($_POST as $row => $val) {
    //$type = $dataType[$row];
    $type = null;
    switch ($type)
    {
        case 'integer':
        {
            $set_val = intval($val);
        } break;
        default:
        {
            $set_val = $val;
        } break;
    }
    if($val != '') {
        $data[$row] = $set_val;
    }
}
$send_type = $data['i_send_type'];
$i_color = false;
if (isset($data['i_color'])) {
    $i_color = true;
}

unset($data['i_send_type']);
unset($data['i_send_url']);
unset($data['i_api_type']);
unset($data['i_input_header']);
unset($data['i_input_uri']);
unset($data['i_color']);
$url = $_POST['i_send_url'];
$i_input_uri = $_POST['i_input_uri'];
if (!empty($i_input_uri)) {
    $input_uri = explode(',', $i_input_uri);
    $uri_data = array();
    foreach($input_uri as $row) {
        //var_dump($row);
        $uri_data[] = $data[$row];
        unset($data[$row]);
    }
    $url .= '/' . implode("/", $uri_data);
}

// 建立 header
$i_input_header = $_POST['i_input_header'];

$header_encode = '<table>';
$header_data = array();
if (!empty($i_input_header)) {
    $input_header = explode(',', $i_input_header);
    foreach($input_header as $row) {    
        $header_encode .= '<tr><td>'. $row . '</td><td> = ' . $data[$row]."</td></tr>";
        $header_data[] = $row . ": " . $data[$row];
        unset($data[$row]);
    }
}
$header_encode .= '</table>';

$api_type = $_POST['i_api_type'];
//echo json_encode($data);
//var_dump($data);
//var_dump($url);
$data_encode = '<table>';
//$data_encode .= json_encode($data, JSON_UNESCAPED_UNICODE);
$str = '';
foreach ($data as $key => $val) {
    $data_encode .= '<tr><td>'. $key . '</td><td> = ' . $val."</td></tr>";
}
$data_encode .= '</table>';
$ret = send_json($url, $data, $send_type, $header_data);
// 把 ansi 轉成 html
if ($i_color) {
    $ret = $converter->convert($ret);
}
$ret_decode      = json_decode($ret);
$json_print      = json_encode($ret_decode, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
$ret_decode_array = json_decode($ret, true);



require_once('test/' . $api_type . '/api.php');
require_once('test/' . $api_type . '/value.php');
$parameter_list = $value;


$ret_decode_help = array();
if (is_array($ret_decode_array)) {
    foreach($ret_decode_array as $key => $val) {
        //var_dump($key);
        if (isset($parameter_list[$key])) {
            $ret_decode_help[$key] = $parameter_list[$key];
        }
    }
}

//var_dump($ret_decode_help);
//echo json_encode($ret);



?>
<style>
    html {
      height: 100%;
    }
    body {
      min-height: 100%;
    }
    input {
        width: auto;
    };
    pre {border-style: solid;}
</style>
<table>
<tr>
    <td>url:</td>
    <td><input id="i_url" type="text" name="" size="155" value="<?= $url; ?>"></td>
</tr>
</table>

<p>header data:</p>
<pre style="padding:10px;border:1px #FFAC55 solid;white-space: pre-wrap;">
<?= $header_encode; ?>
</pre>

<p>post data:</p>
<pre style="padding:10px;border:1px #FFAC55 solid;white-space: pre-wrap;">
<?= $data_encode; ?>
</pre>

<p>return data:</p>
<pre style="padding:10px;border:1px #FFAC55 solid;white-space: pre-wrap;background-color: #000;color: white;">
<?= $ret; ?>
</pre>

<p>return json:</p>
<pre style="padding:10px;border:1px #FFAC55 solid;white-space: pre-wrap;">
<?= $json_print; ?>
</pre>

<p>return json help:</p>
<pre style="padding:10px;border:2px #0000FF solid;white-space: pre-wrap;">
<?php
//var_dump($ret_decode_help);
foreach($ret_decode_help as $key => $val) {
    echo '<pre style="padding:10px;border:1px blue solid;white-space: pre-wrap;">';
    echo $key . ':';
    echo $val['help'];
    echo '</pre>';
}
?>
</pre>
