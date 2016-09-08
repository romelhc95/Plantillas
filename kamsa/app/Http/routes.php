<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::group(['prefix' => 'user', 'namespace' => 'User'], function(){
        
    Route::resource('users','UsersController');    
    Route::resource('customers','CustomerController');
    Route::get('provinces/{id}', 'CustomerController@getProvinces');
    Route::get('districts/{id}','CustomerController@getDistricts');
    Route::get('loans/{id}','CustomerController@getFind');
    Route::resource('loans','LoansController');
        
});
