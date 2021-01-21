<?php

use App\Http\Controllers\Admin\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/addData', function () {
//    return view('User.Event.adddata');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', function (){
    return redirect()->route('event.index');
});

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('event', \App\Http\Controllers\Admin\EventController::class);
    Route::resource('pembimbing',\App\Http\Controllers\DosenController::class);

    Route::view('/help', 'admin.event.help');

    Route::post('events/{id}/approve', [\App\Http\Controllers\Admin\EventController::class, 'approve'])->name('events.approve');
    Route::post('events/{id}/decline', [EventController::class, 'decline'])->name('events.decline');
});

Route::group(['middleware' => 'user', 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::resource('event', \App\Http\Controllers\EventController::class);
    Route::resource('data', \App\Http\Controllers\EventUserController::class);

    Route::view('/help', 'user.event.help');
});

