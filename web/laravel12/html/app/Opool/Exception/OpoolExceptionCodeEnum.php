<?php
/**
 * Author: Eric G. Huang
 * Date Time: 3/20/16 10:31 AM
 */

namespace App\Opool\Exception;

abstract class OpoolExceptionCodeEnum
{
    const ERR_SEND_SQL = 1000;
    const ERR_FETCHING = 1001;
    const ERR_SQL_NULL = 1002;
    const ERR_QUERY_TIMEOUT = 1003;
    const ERR_CONNECTION = 1004;
}
