<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/','HomeController@index');
Route::get('login','UsersController@Login');
Route::get('logout','UsersController@logout');
Route::get('forgot','UsersController@forgot');
Route::get('adminLogin','UsersController@adminLogin');
Route::get('landing','HomeController@landingpage');
Route::get('adminHome','UsersController@homepage');
Route::get('register','UsersController@signup');

