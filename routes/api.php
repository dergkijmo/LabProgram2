<?php

use App\Http\Controllers\YyhController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('user/viewInnovationStar',[\App\Http\Controllers\WkxController::class,'chaxun']);//查询

Route::post('user/editInnovationStar',[\App\Http\Controllers\WkxController::class,'xiugai']);//修改

Route::post('user/deleteInnovationStar',[\App\Http\Controllers\WkxController::class,'shanchu']);//删除

Route::post('send-code',[VerificationController::class,'sendVerificationCode']);//发送邮件
