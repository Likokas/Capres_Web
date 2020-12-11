<?php

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

Route::get('/index', function (){
    return redirect()->route('event.index');
});
Route::resource('event', \App\Http\Controllers\EventController::class);

//Route::get('/index', function () {
//    return view('User.Event.index');
//});

Route::get('/addData', function () {
    return view('User.Event.adddata');
});

Route::get('/admin', function () {
    return view('Admin.Event.index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


