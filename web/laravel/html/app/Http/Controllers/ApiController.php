<?php

namespace App\Http\Controllers;

use Illuminate\Http\Exceptions\HttpResponseException;
use App\Http\Controllers\Controller as Controllers;

class ApiController extends Controllers
{
    public $responseData = null;
    public $responseHeader = array();
    public $isSuccess = false;

    // 設定 Header key 跟 value
    public function setResponseHeader($key, $value)
    {
        $this->responseHeader[$key]  = $value;
    }

    // 取得 Header
    public function getResponseHeader()
    {
        return $this->responseHeader;
    }

    // 設定 response key 的方法
    public function set($key, $value)
    {
        $this->responseData[$key]  = $value;
    }
    
    public function error($code = 400, $message = "system error", $head = 400)
    {
        // make bloxmith error rule
        $response = array();
        $response['errorCode'] = $code;
        $response['errorMessage'] = $message;
        $response['route'] = '';
        $response['data'] = '';

        $response['isSuccess'] = false;

        throw new HttpResponseException(response()->json($response, $head));
    }    
    

    // 執行成功時，使用的 Function 會組成 response
    public function success()
    {
        $this->setResponseHeader('status', 'success');
        $this->setResponseHeader('code', 200);
        $this->setResponseHeader('message', '成功');
        $this->setResponseHeader('data', $this->responseData);
        $data = $this->getResponseHeader();
        $res = response()->json($data, 200);
        return $res;
    }
}
