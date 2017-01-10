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

Route::get('/', function () {
    return view('master');
});

//Route::group(['middleware'=>['web']],function(){
//    Route::resource('admin_details','adminDetailController');
//
//});

Route::get('/home', array('as' => 'home', 'uses' => 'sidebar@home'));

Route::get('/companyAudit', array('as' => 'companyAudit', 'uses' => 'sidebar@companyAudit'));

Route::get('/balanceSheet', array('as' => 'balanceSheet', 'uses' => 'sidebar@balanceSheet'));

Route::get('/logOut', array('as' => 'logOut', 'uses' => 'sidebar@logOut'));
