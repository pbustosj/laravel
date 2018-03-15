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

//Ruta para página principal = Index
Route::get('/{message?}', 'IndexController@index');

//Rutas para Login
Route::get('/login', 'LoginController@index');


Route::get('/dashboard', function () {
	return view('dashboard');
});

//Rutas de usuario
Route::get('/usuarios','UserController@index');
Route::get('/usuarios/create/{message?}','UserController@create');
Route::post('/usuarios/save','UserController@save');

Route::get('/notificaciones','NotificationController@index');