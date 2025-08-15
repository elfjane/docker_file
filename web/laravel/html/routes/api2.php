<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Test3Controller;

Route::get('/test', [TestController::class, 'index']);
Route::get('/test3', [Test3Controller::class, 'index']);