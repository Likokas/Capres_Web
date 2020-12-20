<?php

use App\Http\Controllers\Api\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('api-register',[\App\Http\Controllers\Api\Auth\RegisterController::class,'register']);
//login user
Route::post('api-login',[LoginController::class,'login']);
//login admin
Route::post('api-loginadmin',[LoginController::class,'loginAdmin']);
Route::post('refresh',[LoginController::class,'refresh']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::apiResource('events', \App\Http\Controllers\Api\EventController::class);
    Route::post('logout', [LoginController::class, 'logout']);
});


