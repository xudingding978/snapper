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


Route::get('/home', function () {
    return view('welcome');
});



//Login
Route::get('auth/user/login', 'Auth\AuthUserController@getLogin');

Route::post('auth/user/login', 'Auth\AuthUserController@postLogin');

Route::get('auth/user/logout', 'Auth\AuthUserController@getLogout');

Route::get('auth/client/login', 'Auth\AuthClientController@getLogin');

Route::post('auth/client/login', 'Auth\AuthClientController@postLogin');

Route::get('auth/client/logout', 'Auth\AuthClientController@getLogout');



//Registration

Route::get('auth/user/register', 'Auth\AuthUserController@getRegister');

Route::post('auth/user/register', 'Auth\AuthUserController@postRegister');

Route::get('auth/client/register', 'Auth\AuthClientController@getRegister');

Route::post('auth/client/register', 'Auth\AuthClientController@postRegister');


Route::controllers([
    'password' => 'Auth\PasswordController',
]);
