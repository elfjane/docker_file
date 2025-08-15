<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test3Controller extends ApiController
{
    public function index()
    {
        //return $this->success();
        $this->set('uid', 520520);
        $this->set('name', "elfjane");
        return $this->error(1500, "error");
        return $this->success();
    }
}
