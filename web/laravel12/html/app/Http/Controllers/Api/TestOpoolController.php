<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Opool\PayOrder;
use App\Models\Opool\ZelfjaneTest;


class TestOpoolController extends ApiController
{
    public $payOrder;
    public $zelfjaneTest;

    public function __construct(PayOrder $payOrder,
    ZelfjaneTest $zelfjaneTest
    )
    {
        $this->payOrder = $payOrder;
        $this->zelfjaneTest = $zelfjaneTest;
    }
    public function index()
    {
        //$results = $this->payOrder->findByOrderId("A18041261717381");
        $insertData = [
            'ID' => 1234555,
            'COLUMN1' => 12345556,
            'COLUMN2' => '2025-01-02'
        ];
        $dataElfjane['insert'] = $this->zelfjaneTest->insert($insertData);
        //$results['delete'] = $this->zelfjaneTest->delete();
        $dataElfjane['delete'] = $this->zelfjaneTest->where('ID', 1234555)->delete();
        $dataElfjane['find'] = $this->zelfjaneTest->find(1);
        $dataElfjane['find_key'] = $this->zelfjaneTest->find('2','ID');
        $dataElfjane['select_where_get'] = $this->zelfjaneTest->where('COLUMN1', 'test3')->get();
        $dataPayOrder['select_where_first'] = $this->payOrder->select('ORDER_ID', 'payee')->where('ORDER_ID', '=','A18051263375301')->first();
        $results = [
            'elfjane_test' => $dataElfjane,
            'pay_order' => $dataPayOrder,
        ];
        $this->set('elfjane_test', $dataElfjane);
        $this->set('pay_order', $dataPayOrder);

        return $this->success();

    }
}
