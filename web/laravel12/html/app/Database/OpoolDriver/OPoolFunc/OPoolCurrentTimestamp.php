<?php

namespace App\Database\OpoolDriver\OPoolFunc;

class OPoolCurrentTimestamp extends OPoolFuncBase
{
    public function getSql()
    {
        return "Current_Timestamp";
    }
}