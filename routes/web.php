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
	return view('index/index');
});

Route::get('/login', function () {
	return view('login/login');
});


Route::get('/dashboard', function () {
	return view('dashboard');
});

Route::get('/usuarios','UserController@index');
Route::get('/usuarios/create/{message?}','UserController@create');
Route::post('/usuarios/save','UserController@save');

Route::get('/notificaciones','NotificationController@index');