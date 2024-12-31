<?php
// 如果 getallheaders function 不存在，自動建立一個
if (!function_exists('getallheaders')) {
    function getallheaders()
    {
       $headers = array ();
       foreach ($_SERVER as $name => $value)
       {
           if (substr($name, 0, 5) == 'HTTP_') {
               $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
           }
       }
       return $headers;
    }
}

// 取得 真實 IP
function get_IP()
{
    // 判定 HTTP_X_FORWARDED_FOR 是否存在
    if (empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // 如果不存在 檢查 HTTP_X_REAL_IP 是否存在，如果存在則指定IP
        if (!empty($_SERVER['HTTP_X_REAL_IP'])) {
            $user_ip = $_SERVER['HTTP_X_REAL_IP'];
        }

        // 如果 user_ip 沒有 IP 則指定 REMOTE_ADDR 為 IP
        if (empty($user_ip)) {
            $user_ip = $_SERVER['REMOTE_ADDR'];
        }
    } else {
        $user_ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $user_ip = $user_ip[0];
    }

    return $user_ip;
}

// 取得 伺服器 IP
function get_server_IP()
{
    return $_SERVER['SERVER_ADDR'];;
}

function make_inputs($api_type)
{
    require_once('test/' . $api_type . '/api.php');
    require_once('test/' . $api_type . '/value.php');

    $api_file_php  = 'test/' . $api_type . '/api.php';
    $api_file_json = 'test/' . $api_type . '/api.json';

    $value_file_php  = 'test/' . $api_type . '/value.php';
    $value_file_json = 'test/' . $api_type . '/value.json';

    if (file_exists($api_file_json)) {
        $api_json = file_get_contents($api_file_json);
        $api = json_decode($api_json, JSON_OBJECT_AS_ARRAY);
    }
      
    $item_list = $api;

    $parameter_list = $value;

    $inputs = array();

    foreach($item_list as $key => $val) {
        $inputs[$key]['item_url']       = $val['item_url'];
        $inputs[$key]['item_type']      = $val['item_type'];
        $inputs[$key]['item_title']     = $val['item_title'];
        $inputs[$key]['item_help']      = $val['item_help'];

        foreach($val['parameter_list'] as $row2) {
            if (isset($parameter_list[$row2])) {
                $inputs[$key]['parameter_list'][$row2] = $parameter_list[$row2];
            } else {
                $inputs[$key]['parameter_list'][$row2] = '';
            }
        }
        // 檢查是否要修改發送網址位置
        if (isset($val['parameter_uri'])) {
            $inputs[$key]['item_uri'] = implode(",", $val['parameter_uri']);
            $inputs[$key]['item_uri_help'] = '/{' . implode("}/{", $val['parameter_uri']) . "}";
            foreach($val['parameter_uri'] as $row2) {
                if (isset($parameter_list[$row2])) {
                    $inputs[$key]['parameter_uri'][$row2] = $parameter_list[$row2];
                } else {
                    $inputs[$key]['parameter_uri'][$row2] = '';
                }
            }
        }

        // 檢查是否要連接到後面的參數，如果有則連結到後面
        if (isset($val['parameter_header'])) {
            $inputs[$key]['item_header'] = implode(",", $val['parameter_header']);
            foreach($val['parameter_header'] as $row2) {
                if (isset($parameter_list[$row2])) {
                    $inputs[$key]['parameter_header'][$row2] = $parameter_list[$row2];
                } else {
                    $inputs[$key]['parameter_header'][$row2] = '';
                }
            }
        }
    }
    return $inputs;

}

function get_parameter_list($key, $val_data)
{
    $parameter_val = '';
    $parameter_help = '';
    $parameter_type = '';
    $parameter_name = '';
    if (isset($val_data['name'])) {
        $parameter_name = $val_data['name'];
    }
    if (isset($val_data['val'])) {
        $parameter_val = $val_data['val'];
    }
    if (isset($val_data['help'])) {
        $parameter_help = $val_data['help'];
    }
    if (isset($val_data['type'])) {
        $parameter_type = $val_data['type'];
    }


    $data = array(
        "v"     => $parameter_val,
        "title" => $key,
        "name" => $parameter_name,
        "help"  => $parameter_help,
        "type"  => $parameter_type,
    );
    return $data;
}

// 轉成網頁格式
function make_html($inputs, $url)
{
    $input_list = array();
    foreach ($inputs as $input => $value) {

        $input_list[$input] = array(
            "name" => $input,
            "src"  => $url . $value['item_url'],
        );
        $input_list[$input]["item_url"]      = $url . $value['item_url'];
        $input_list[$input]["item_type"]     = $value['item_type'];
        $input_list[$input]["item_title"]    = $value['item_title'];
        $input_list[$input]["item_help"]     = $value['item_help'];
        $input_list[$input]["item_uri"]      = '';
        $input_list[$input]["item_uri_help"] = '';
        $input_list[$input]["item_header"]   = '';
        if (!isset($value['parameter_list']) || count($value['parameter_list']) < 1) {
            $input_list[$input]["key"] = array();
        }
        if (isset($value['parameter_list'])) {
            foreach ($value['parameter_list'] as $key => $val) {
                $input_list[$input]["key"][$key] = get_parameter_list($key, $val);
            }
        }

        if (isset($value['parameter_uri'])) {
            $input_list[$input]["item_uri"]  = $value['item_uri'];
            $input_list[$input]["item_uri_help"]  = $value['item_uri_help'];
            foreach ($value['parameter_uri'] as $key => $val) {
                $input_list[$input]["uri"][$key] = get_parameter_list($key, $val);
            }
        }

        if (isset($value['parameter_header'])) {
            $input_list[$input]["item_header"]  = $value['item_header'];
            foreach ($value['parameter_header'] as $key => $val) {
                $input_list[$input]["header"][$key] = get_parameter_list($key, $val);
            }
        }
    }
    return $input_list;
}

// 取得 api type
function get_api_type()
{
    $dir = __DIR__;

    $path = $dir . "/test";
    $results = scandir($path);

    $folders = array();
    foreach ($results as $result) {
        if ($result == '.' || $result == '..') {
            continue;
        }
        if (is_dir($path . '/' . $result)) {
           $folders[] = $result;
        }
    };
    return $folders;
}
// 發送 json
function send_json($url, $data, $type, $header = array())
{
    $headers = array('Content-Type: application/x-www-form-urlencoded');
    $post_data = http_build_query($data);

    if ($type == 'GET') {
        $url_query = parse_url($url, PHP_URL_QUERY);
        if (!empty($url_query)) {
            // 將現有參數和新參數合併成一個陣列
            $currentParams = array();
            parse_str($url_query, $currentParams);
            $newParams = array_merge($currentParams, $data);

            // 新的 URL 字串
            $url = strtok($url, '?') . '?' . http_build_query($newParams);
        }
    }
    $send_type = 'urlencoded';
    if (defined('CRON_SEND_TYPE')) {
        $send_type = CRON_SEND_TYPE;
    }

    switch ($send_type)
    {
        case 'json':
        {
            $headers = array('Content-Type: application/json');
            $post_data = json_encode($data);
        } break;
        default:
        {
        } break;
    }

    if (!empty($header)) {
        $headers = array_merge($headers, $header);
    }
    //var_dump($headers);
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if($result === false) {
        return 'request error: ' . curl_error($ch);
    }
    return $result;
}

# 取得目錄資料
function dirToArray($dir)
{
    $result = array();

    $cdir = scandir($dir, SCANDIR_SORT_DESCENDING);

    foreach ($cdir as $key => $value)
    {
        if (!in_array($value, array(".", ".."))) {
            if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
            } else {
                $result[] = $value;
            }
        }
    }

    return $result;
}

function dirToArray2($dir, $result = array())
{
    $cdir = scandir($dir, SCANDIR_SORT_DESCENDING);

    foreach ($cdir as $key => $value)
    {
        if (!in_array($value, array(".", ".."))) {
            if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                $result = dirToArray2($dir . DIRECTORY_SEPARATOR . $value, $result);
            } else {
                $result[] = $dir. '/' . $value;
            }
        }
    }

    return $result;
}

# 取得目錄資料
function dirToArrayChange($datas, $remove)
{
    $result = array();
    foreach ($datas as $row)
    {
        $data = str_replace($remove, '', $row);
//        $data = $row;

        $result[] = $data;
    }
    return $result;
}

# 取得目錄資料
function dirToArrayString($dir)
{
   $resultDirToArray = dirToArray($dir);
   $results = array();

   foreach ($resultDirToArray as $key => $value)
   {
      if (!in_array($value,array(".","..")))
      {
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
            $results[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
         } else {
            $results[] = $value;
         }
      }
   }

   return $result;
}

/*
// csv load
$file='test/' . $api_type . '/value.csv';
$csv= file_get_contents($file);
$array = array_map("str_getcsv", explode("\n", $csv));
$json = json_encode($array);
print_r($json);
*/
?>
