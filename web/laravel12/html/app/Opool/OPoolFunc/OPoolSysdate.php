<?php

namespace PCPay\API\Database\OPool\OPoolFunc;


class OPoolSysdate extends FuncBase
{
    //private $days;
    private $isTrunc;
    private $seconds;

    public function __construct($days = 0, $isTrunc = false)
    {
        //$this->days = $days;
        $this->seconds = $days * 24 * 60 * 60;

        $this->isTrunc = $isTrunc;

    }

    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;
    }

    public function getSql()
    {
        if ($this->isTrunc) {
            return "trunc(sysdate) + ((1 / 24 / 60 / 60) * {$this->seconds})";
        }

        return "sysdate + ((1 / 24 / 60 / 60) * {$this->seconds})";
    }
}