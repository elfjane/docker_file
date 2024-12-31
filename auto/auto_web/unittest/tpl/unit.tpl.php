<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="elfjane">
    <meta name="Keywords" content="unittest">
    <meta name="Description" content="test debug api">
    <title>unittest</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .boxsizingBorder {
            -webkit-box-sizing: border-box;
               -moz-box-sizing: border-box;
                    box-sizing: border-box;
              border:1px solid #999999;
              width:100%;
              height:600px;
              margin:5px 0;
              padding:3px;
        }
    </style>
</head>
<body>

<div class="status">
    <p>
<?php
foreach ($api_type_list as $row)
{
    echo '<a href="?tpl='.$tpl.'&tpl_del='.$tpl_delete.'&api_type=' . $row . '">' . $row . '</a> | ';
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
<button onclick="clickUnittest('phpunit_<?=$index;?>')" type="buttom">larave phpunit</button>
<div style="width:100%">
    <textarea name="" rows="" cols="" id="phpunit_<?=$index?>" class="boxsizingBorder" hidden><?=getLaravelTest($val['item_url'], $tpl_delete, $val)?></textarea>
</div>
</div>
<?php
}
?>
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
    load_iframe();
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

function clickUnittest(id) {
  var x = document.getElementById(id);
  console.log(x.style.display);
  if (x.style.display === "none" || x.style.display === "") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</body>
</html>
