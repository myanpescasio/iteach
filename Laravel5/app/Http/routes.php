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

Route::get('/', 'WelcomeController@index');

//Home page
Route::get('index', 'ITEACH\AuthController@index');

Route::get('login', ['middleware' => 'guest', 'uses' => 'ITEACH\AuthController@login']);
Route::get('attempt_login', ['middleware' => 'guest', 'uses' => 'ITEACH\AuthController@attempt']);

Route::get('guest', 'ITEACH\AuthController@use_guest');

Route::get('register', 'ITEACH\AuthController@signup');

Route::get('home', ['middleware' => 'auth', 'uses' => 'ITEACH\HomeController@home']);

//Route for the parser

Route::get('parser', 'ITEACH\AdminParserController@parse');
Route::get('uploadFile', 'ITEACH\AdminParserController@index');

Route::get('viewAll', 'ITEACH\GuestViewController@viewAll');
Route::get('viewCourse', 'ITEACH\GuestViewController@viewCourse');
Route::get('viewInstructor', 'ITEACH\GuestViewController@viewInstructor');
Route::get('viewRoom', 'ITEACH\GuestViewController@viewRoom');

//No view has been made for this yet.
Route::get('logout', function(){
	Session::forget('guest');
	Auth::logout();
	return redirect()->intended('index');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
