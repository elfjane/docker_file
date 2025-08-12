<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Test2Controller;
use App\Http\Controllers\Api\TestOpoolController;
use App\Http\Middleware\RequestTimeLogger;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware([RequestTimeLogger::class])->apiResource('test2', Test2Controller::class);
Route::middleware([RequestTimeLogger::class])->apiResource('testOpool', TestOpoolController::class);