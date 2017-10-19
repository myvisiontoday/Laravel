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

Route::auth();

Route::get('register/confirm/{token}', 'Auth\AuthController@confirmEmail');

//Route::get('/home', 'HomeController@index');
Route::get('profile', 'HomeController@showProfile');
Route::post('profile', 'HomeController@update_avatar');


Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('create', 'DashboardController@create');
    Route::post('store', 'DashboardController@store');
    Route::get('/home', 'DashboardController@index');
    Route::get('edit/{id}', 'DashboardController@edit');
    Route::patch('update/{id}', 'DashboardController@update');
    Route::get('delete/{id}', 'DashboardController@destroy');
});


Route::get('/getPDF', 'PDFController@getPDF');