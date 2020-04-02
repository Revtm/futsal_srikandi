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
    return view('home');
});

Route::get('test',function () {
    return view('test');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('schedule', 'ScheduleCon@index' );
Route::get('schedule/getdata', 'ScheduleCon@getDataTransaksi' );


Route::get('/login','AuthController@getLogin');
Route::post('/login','AuthController@postLogin')->name('login');
Route::get('/home',function() {
    return view('schedule');
})->name('home');
