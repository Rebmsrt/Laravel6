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
//Admin
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');
Route::get('/admin', function () {
    if (Auth::user()->admin == 1)
    { return view('auth.admin');;}
    else { return redirect('/home'); }
});
//переадресация на стр регистрации
Route::get('/', function () {
    return redirect('/register');
});
//Сообщение об успешной регистрации
Route::get('/alert', function () {
    return view('alert');
});

Route::get('/razdel', 'RazdelController@index')->middleware('auth');

Route::post('{user}/razdels', 'RazdelController@store')->middleware('auth');

Route::delete('razdels/{razdel}', 'RazdelController@destroy')->middleware('auth');

Route::get('razdels/{razdel}', 'RazdelController@edit')->middleware('auth');
