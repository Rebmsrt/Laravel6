<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//переадресация на стр регистрации
Route::get('/', function () {
    return redirect('/register');
});
//Сообщение об успешной регистрации
Route::get('/alert', function () {
    return view('alert');
});
