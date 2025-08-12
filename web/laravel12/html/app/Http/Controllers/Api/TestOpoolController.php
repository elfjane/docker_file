<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PayOrderDAO;


class TestOpoolController extends Controller
{
    public function index()
    {
        $p = new PayOrderDAO();
        $results = $p->findByOrderId("A18041261717381");
        return response()->json($results);

    }
}
