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

Route::resource('/', 'HomeController');

//Nuevos Controladores con URL transport
Route::post('transport/transport-user/search', 'ControllerTransPorUser@search')->name('transport-user.search');
Route::resource('transport/transport-user', 'ControllerTransPorUser');
