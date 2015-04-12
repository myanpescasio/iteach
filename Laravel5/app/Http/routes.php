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

Route::get('/', 'ITEACH\AuthController@index');
Route::get('index', 'ITEACH\AuthController@index');

Route::get('login', ['middleware' => 'guest', 'uses' => 'ITEACH\AuthController@login']);
Route::post('attempt_login', ['middleware' => 'guest', 'uses' => 'ITEACH\AuthController@attempt']);

Route::get('guest', 'ITEACH\AuthController@use_guest');

Route::get('register', ['middleware' => 'guest', 'uses' => 'ITEACH\AuthController@signup']);
Route::post('attempt_register', ['middleware' => 'guest', 'uses' => 'ITEACH\AuthController@attempt_register']);

Route::get('home', ['middleware' => 'auth', 'uses' => 'ITEACH\HomeController@home']);

// Administrator Routes
Route::get('adminHome', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@index']);
Route::get('addCourse', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@addCourse']);
Route::get('addSection', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@addSection']);
Route::get('swapSection', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@swapSection']);

Route::get('adminViewAll', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@viewAll']);
Route::get('adminViewCourse', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@viewCourse']);
Route::get('adminViewRoom', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@viewRoom']);
Route::get('adminViewInstructor', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@viewInstructor']);

Route::get('dissolveSection', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@dissolveSection']);
Route::get('viewSystemLog', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@viewSystemLog']);
Route::get('editMinorDetailsFaculty', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@editMinorDetailsFaculty']);
Route::get('editMinorDetailsRoom', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminController@editMinorDetailsRoom']);
Route::get('uploadCSVFile', ['middleware' => 'admin', 'uses' => 'ITEACH\AdminParserController@index']);
Route::post('processCSVFile', 'ITEACH\AdminParserController@processCSV');

//Guest Routes
Route::get('viewAll', 'ITEACH\ViewController@viewAll');
Route::get('viewCourse', 'ITEACH\ViewController@viewCourse');
Route::get('viewInstructor', 'ITEACH\ViewController@viewInstructor');
Route::get('viewRoom', 'ITEACH\ViewController@viewRoom');

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
