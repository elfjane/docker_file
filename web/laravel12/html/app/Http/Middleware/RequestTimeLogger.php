<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequestTimeLogger
{
    public function handle(Request $request, Closure $next): Response
    {
        // 開始時間（微秒）
        $start = microtime(true);

        // 呼叫下一個 middleware 或 controller
        $response = $next($request);

        // 結束時間（微秒）
        $end = microtime(true);

        // 計算差值（秒）
        $duration = round($end - $start, 4); // 保留 4 位小數

        // 加入 HTTP header（也可用 log 記錄）
        $response->headers->set('X-Execution-Time', "{$duration}s");

        return $response;
    }
}

