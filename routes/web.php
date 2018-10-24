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

Route::get('/', function () {
    return view('/auth/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/messages', 'MessageController@index');
Route::post('/message', 'MessageController@store');
Route::delete('/message/{task}', 'MessageContoller@destroy');

Route::get('/archive/{pg}', 'HomeController@archives')->name('archives');
