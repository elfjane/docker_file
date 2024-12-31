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
    server ip: <?=get_server_IP(); ?>, your ip <?= get_IP(); ?></p>
</div>
<div class="tab_css">

<form  class="form-horizontal f_send" method="post"  target="iframe_a"  action="post.php" id="myframe" style="width:100%">
    <input type="hidden" name="i_send_url" value="<?= $i_send_url ?>">
    <input type="hidden" name="i_send_type" value="GET">
    <input type="hidden" name="i_api_type" value="<?= $api_type; ?>">
    <input type="hidden" name="i_input_header" value>
    <input type="hidden" name="i_input_uri" value>

    <div class="table_main">
    <table>
    <tr>
        <th>Parameter Name</th>
        <th>Parameter Title</th>
        <th>Parameter Type</th>
        <th>Parameter Help</th>
        <th>Parameter Value</th>
    </tr>
        <tr>
            <td class="right_th">log_file</th>
            <td>讀取 log 檔案名稱</td>
            <td>string</td>
            <td>讀取 log 檔案名稱</td>
            <td>
                <select name="log_file">
<?php
foreach ($load_file as $row) {
?>

    <option value="<?= $row ?>"><?= $row ?>


<?php
}
?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="right_th">send url</th>
            <td colspan="3"><?= $i_send_url ?></td>
            <td><button type="submit" class="btn" onclick="return load_iframe()">GET</button></td>
        </tr>
    </table>
    </div>

</form>
</div>

</div>
<div class="html_iframe">
    <iframe id="iframe_submit" name="iframe_a" src="" width="100%" height="600" scrolling="auto" allowtransparency="true"></iframe>
</div>

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
