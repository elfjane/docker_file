<?php

namespace PCPay\API\Database\OPool\OPoolFunc;


class OPoolCurrentTimestamp extends FuncBase
{
    public function getSql()
    {
        return "Current_Timestamp";
    }
}