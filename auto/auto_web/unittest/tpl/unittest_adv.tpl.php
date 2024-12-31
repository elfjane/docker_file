<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="elfjane">
    <meta name="Keywords" content="unittest">
    <meta name="Description" content="test debug api">
    <title>unittest</title>

    <style>
        table{width: 100%;border-collapse: collapse;}
        table td{border: solid 1px white;}
        table tr:last-child{border-bottom: none;}
        table th{border: solid 1px white;background-color: #0cb9e0;color: white;text-align: center;}
        table .right_th{width:15%;position: relative;background-color: #0dcaf0;color: white;text-align: center;padding: 10px 0;}
        table .right_th:after{display: block;content: "";width: 0px;height: 0px;position: absolute;top:calc(50% - 10px);right:-10px;border-left: 10px solid #0dcaf0;border-top: 10px solid transparent;border-bottom: 10px solid transparent;}
        table .right_header{width:15%;position: relative;background-color: grey;color: white;text-align: center;padding: 10px 0;}
        table .right_header:after{display: block;content: "";width: 0px;height: 0px;position: absolute;top:calc(50% - 10px);right:-10px;border-left: 10px solid grey;border-top: 10px solid transparent;border-bottom: 10px solid transparent;}
        table .right_uri{width:15%;position: relative;background-color: green;color: white;text-align: center;padding: 10px 0;}
        table .right_uri:after{display: block;content: "";width: 0px;height: 0px;position: absolute;top:calc(50% - 10px);right:-10px;border-left: 10px solid green;border-top: 10px solid transparent;border-bottom: 10px solid transparent;}

        table td{text-align: left;background-color: #eee;padding: 2px 5px 2px 20px}
        .btn{padding:5px;width:100%;  font-size: calc(1em + 1vmin);background: #0d6efd;color:#fff;border-radius: 5px;border: 1px solid #0d6efd;}
        .btn:hover{color:#eee;border: 1px solid #000;}
        .status{margin:10px;text-align:right;}
        .html_iframe{display:flex;flex-wrap:wrap;justify-content:center;margin:10px;}
        .tab_css{display:flex;flex-wrap:wrap;margin:10px;}
        .tab_css .i_input{display:none}
        .tab_css .i_label{margin: 0 5px 5px 0; padding: 10px 16px; cursor: pointer; border-radius: 5px; background: #0d6efd; color: #fff; opacity: 0.7;}
        .tab_content{order:1;display: none; width:100%; border-bottom: 3px solid #ddd; line-height: 1.6; padding: 15px; border: 1px solid #ddd; border-radius: 5px;}
        .tab_css .i_input:checked + .i_label, .i_label:hover{opacity: 1; font-weight:bold;}
        .tab_css .i_input:checked + .i_label + .tab_content{display: initial;}
        input[type=text]{width:90%;margin:0}
        pre {
            display: block;
            padding: 3px;
            word-break: break-all;
            word-wrap: break-word;
            white-space: pre;
            white-space: pre-wrap;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0,0,0,0.15);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="status">
    <p>
<?php
foreach ($api_type_list as $row)
{
    echo '<a href="?api_type=' . $row . '">' . $row . '</a> | ';
}
?>
    server ip: <?=get_server_IP(); ?>, your ip <?= get_IP(); ?></p>
</div>
<div class="tab_css">
<?php
$index=10;
$checked = ' checked="checked"';

foreach ($html as $key => $val)
{
    $index++;
	echo '<input class="i_input" id="tab'.$index. '" type="radio" name="tab"'.$checked .'/>';
    $checked  = '';
    echo '<label class="i_label" for="tab'.$index. '">'.$val['item_title'].'</label>';
	echo '<div class="tab_content">';
    //var_dump($val);
?>
<form  class="form-horizontal f_send" method="post"  target="iframe_a"  action="post.php" id="myframe">
    <input type="hidden" name="i_send_url" value="<?= $val['item_url'] ?>">
    <input type="hidden" name="i_send_type" value="<?= $val['item_type'] ?>">
    <input type="hidden" name="i_api_type" value="<?= $api_type; ?>">
    <input type="hidden" name="i_input_header" value="<?= $val['item_header'] ?>">
    <input type="hidden" name="i_input_uri" value="<?= $val['item_uri'] ?>">
    <pre><?=$val['item_help']?></pre>
    <div class="table_main">
    <table>
    <tr>
        <th>Parameter Name</th>
        <th>Parameter Title</th>
        <th>Parameter Type</th>
        <th>Parameter Help</th>
        <th>Parameter Value</th>
    </tr>
<?php
if (isset($val['header'])) {
    getInputHeader('i_input_header', 'right_header', $val['header'], 'Header');
}
if (isset($val['uri'])) {
    getInputHeader('i_input_url', 'right_uri', $val['uri'], 'URI');
}
if (isset($val['key'])) {
    getInputHeader('i_input_key', 'right_th', $val['key'], 'Input');
}
?>
        <tr>
            <td class="right_th">send url</th>
            <td colspan="3"><?=$val['item_url']?><?= $val['item_uri_help']?></td>
            <td><button type="submit" class="btn" onclick="return load_iframe()"><?= $val['item_type'] ?></button></td>
        </tr>
    </table>
    </div>

</form>
</div>
<?php
}
?>
</div>
<div class="html_iframe">
    <iframe id="iframe_submit" name="iframe_a" src="" width="100%" height="600" scrolling="auto" allowtransparency="true"></iframe>
</div>
<style>
.svg-icon {
  width: 1em;
  height: 1em;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
  fill: #4691f6;
}

.svg-icon circle {
  stroke: #4691f6;
  stroke-width: 1;
}
</style>
<svg class="svg-icon" viewBox="0 0 20 20">
    <path d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z"></path>
</svg>
<script>
var is_loading = false;
document.getElementById('myframe').onload = function() {
  alert('myframe is loaded');
};

const iframe = document.getElementById('myframe');
const handleLoad = () => console.log('loaded2');

iframe.addEventListener('load', handleLoad, true)

document.querySelector('iframe#iframe_submit').addEventListener('load', function () {
console.log('loading')
});

document.getElementById('iframe_submit').onload = function() {
	console.log('load_iframe');
	is_loading = false;
};

function load_iframe()
{
	if (is_loading == true)	{
		console.log('wait for loading');
		return false;
	}
	document.getElementById('iframe_submit').src="javascript:document.write('<h3>Results Window</h3>')";
	is_loading = true;
	return true;
}
</script>
</body>
</html>
