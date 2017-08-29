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

    return view('auth/login');
});

Route::get('/home', 'HomeController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/vehicles', 'VehicleController@index');
Route::get('/addvehicle', 'VehicleController@create');
Route::post('/addvehicle', 'VehicleController@store');
Route::get('/vehicle/edit/{id}', 'VehicleController@edit');
Route::post('/vehicle/update', 'VehicleController@update');
Route::get('/vehicle/view/{id}', 'VehicleController@show');
Route::get('/vehicle/delete/{id}', 'VehicleController@destroy');

Route::get('/drivers', 'DriverController@index');
Route::get('/adddriver', 'DriverController@create');
Route::post('/adddriver', 'DriverController@store');
Route::post('/getDriver', 'DriverController@getDriver');
Route::get('/driver/edit/{id}','DriverController@edit');
Route::post('/driver/update', 'DriverController@update');
Route::get('/driver/view/{id}', 'DriverController@show');
Route::get('/driver/delete/{id}', 'DriverController@destroy');
