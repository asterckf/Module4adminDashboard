<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','AdminController@show');
Route::get('edit&{id}','AdminController@edit');
Route::post('update','AdminController@update');

Route::get('user','UserController@index');