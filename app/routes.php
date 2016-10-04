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
//users section
Route::get('homepage',array('uses'=>'HomeController@index', 'as'=>'freepage'));
Route::get('login',array('uses'=>'UsersController@login', 'as'=> 'login'));
Route::post('login',array('uses'=>'UsersController@authenticate','as'=>'authenticate'));
Route::get('logout',array('uses'=>'UsersController@logout', 'as'=>'logout'));
Route::get('forgot',array('uses'=>'UsersController@forgot', 'as'=>'forgotpass'));
Route::get('landing',array('uses'=>'HomeController@landingpage','as'=>'landingpage'));
Route::get('register',array('uses'=>'UsersController@signup','as'=>'register'));
Route::post('register',array('uses'=>'UsersController@store','as'=>'store'));
Route::get('contact',array('uses'=>'UsersController@contacts','as'=>'contact'));

//admin section
Route::get('adminLogin',array('uses'=>'UsersController@adminLogin', 'as'=>'adminLogin'));
Route::get('adminHome',array('uses'=>'UsersController@homepage','as'=>'adminHome'));
Route::get('adminiHome',array('uses'=>'UsersController@adminhomepage','as'=>'adminiHome'));

//authors section

Route::get('newArticle',array('uses'=>'UsersController@newArticle','as'=>'newArticle'));