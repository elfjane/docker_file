<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Api2Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello from API /test!'
        ]);
    }
}