<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Redis;

class Test2Controller extends Controller
{
    public function index()
    {
        $results = [];

        // === MySQL 測試 ===
        try {
            Schema::dropIfExists('test_connection');
            $results['mysql_drop_if_exists'] = 'ok';
        } catch (\Exception $e) {
            $results['mysql_drop_if_exists'] = 'fail';
        }

        try {
            Schema::create('test_connection', function ($table) {
                $table->id();
                $table->string('name')->nullable();
                $table->timestamps();
            });
            $results['mysql_create_table'] = 'ok';
        } catch (\Exception $e) {
            $results['mysql_create_table'] = 'fail';
        }

        try {
            $insertId = DB::table('test_connection')->insertGetId([
                'name' => 'Initial',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $results['mysql_insert'] = $insertId ? 'ok' : 'fail';
        } catch (\Exception $e) {
            $results['mysql_insert'] = 'fail';
        }

        try {
            $record = DB::table('test_connection')->where('id', $insertId)->first();
            $results['mysql_select'] = $record ? 'ok' : 'fail';
        } catch (\Exception $e) {
            $results['mysql_select'] = 'fail';
        }

        try {
            $affected = DB::table('test_connection')->where('id', $insertId)->update([
                'name' => 'Updated',
                'updated_at' => now(),
            ]);
            $results['mysql_update'] = $affected ? 'ok' : 'fail';
        } catch (\Exception $e) {
            $results['mysql_update'] = 'fail';
        }

        try {
            $deleted = DB::table('test_connection')->where('id', $insertId)->delete();
            $results['mysql_delete'] = $deleted ? 'ok' : 'fail';
        } catch (\Exception $e) {
            $results['mysql_delete'] = 'fail';
        }

        try {
            Schema::drop('test_connection');
            $results['mysql_drop_table'] = 'ok';
        } catch (\Exception $e) {
            $results['mysql_drop_table'] = 'fail';
        }

        // === Redis 測試 ===
        $key = 'test_key';

        // insert
        try {
            Redis::set($key, 'init_value');
            $results['redis_insert'] = Redis::get($key) === 'init_value' ? 'ok' : 'fail';
        } catch (\Exception $e) {
            $results['redis_insert'] = 'fail';
        }

        // select
        try {
            $val = Redis::get($key);
            $results['redis_select'] = $val === 'init_value' ? 'ok' : 'fail';
        } catch (\Exception $e) {
            $results['redis_select'] = 'fail';
        }

        // update
        try {
            Redis::set($key, 'updated_value');
            $val = Redis::get($key);
            $results['redis_update'] = $val === 'updated_value' ? 'ok' : 'fail';
        } catch (\Exception $e) {
            $results['redis_update'] = 'fail';
        }

        // delete
        try {
            Redis::del($key);
            $val = Redis::get($key);
            $results['redis_delete'] = is_null($val) ? 'ok' : 'fail';
        } catch (\Exception $e) {
            $results['redis_delete'] = 'fail';
        }
        Log::info('測試完成');
        return response()->json($results);
    }
}
