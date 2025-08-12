<?php

namespace PCPay\API\Database\OPool\OPoolFunc;


class OPoolTodate extends FuncBase
{
    public function __construct($datestr, $format="YYYY/MM/DD HH24:MI:SS")
    {
        $this->dateStr = $datestr;
        $this->format = $format;
    }

    public function getSql()
    {
        $dstr = quotedStr($this->dateStr);
        $fmt = quotedStr($this->format);
        return "to_char({$dstr}, '{$fmt}')";
    }
}