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
Route::get('/login/login',['as'=> 'login/login', 'uses'=> 'LoginController@index']);
Route::post('/login/validatelogin','LoginController@validateLogin');

//Ruta para dashboard
Route::get('/dashboard/dashboard',['as'=> 'dashboard/dashboard', 'uses'=> 'DashboardController@index'] );

//Rutas de usuario
Route::get('/user/user',['as'=> 'user/user', 'uses'=> 'UserController@index']);
Route::get('/user/create/{message?}',['as'=> 'user/create', 'uses'=> 'UserController@create']);
Route::get('/user/edit/{usetToEdit}',['as'=> 'user/edit', 'uses'=> 'UserController@editGet']);
Route::post('/user/edit/{message?}',['as'=> 'user/edit', 'uses'=> 'UserController@edit']);
Route::post('/user/save','UserController@save');
Route::post('/user/update','UserController@update');
Route::post('/user/desactive','UserController@changeStatusUser');

//Rutas para notificaciones
Route::get('/notificaciones/notificaciones',['as'=>'notificaciones/notificaciones', 'uses'=>'NotificationController@index']);
Route::post('/notificaciones/save','NotificationController@save');