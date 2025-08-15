<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Database\OpoolDriver\Models\PayOrder;


class TestOpool2Controller extends Controller
{
    public $payOrder;

    public function __construct(PayOrder $payOrder)
    {
        $this->payOrder = $payOrder;
    }
    public function index()
    {
        $results = $this->payOrder->findByOrderId("A18041261717381");
        return response()->json($results);

    }
}
