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
Route::post('storeprofile',array('uses'=>'UsersController@storeprofile','as'=>'storeprofile'));
Route::get('userviewarticle/{id}',array('uses'=>'UsersController@userviewArticle','as'=>'userviewArt'));

// Route::post('postlogin',array('uses'=>'UsersController@postlogin', 'as'=> 'postlogin'));
Route::post('login',array('uses'=>'UsersController@authenticate','as'=>'authenticate'));
Route::get('logout',array('uses'=>'UsersController@logout', 'as'=>'logout'));
Route::get('forgot',array('uses'=>'UsersController@forgot', 'as'=>'forgotpass'));
Route::get('landing',array('uses'=>'HomeController@landingpage','as'=>'landingpage'));
Route::get('register',array('uses'=>'UsersController@signup','as'=>'register'));
Route::post('register',array('uses'=>'UsersController@store','as'=>'store'));
Route::get('contact',array('uses'=>'UsersController@contacts','as'=>'contact'));

Route::get('home',array('uses'=>'UsersController@homepage2', 'as'=>'home'));
//user view
Route::get('useraccount',array('uses'=>'UsersController@useraccount','as'=>'useraccount'));
Route::get('usersearch',array('uses'=>'UsersController@usersearch','as'=>'userSearch'));

//admin section
Route::get('adminLogin',array('uses'=>'UsersController@adminLogin', 'as'=>'adminLogin'));
Route::get('adminhome',array('uses'=>'UsersController@homepage','as'=>'adminHome'));
Route::post('registeradmincont',array('uses'=>'UsersController@admincont','as'=>'adminRegCont'));

//authors section

Route::get('newArticle',array('uses'=>'articlesController@newArticle','as'=>'newArticle'));
Route::post('newArticle',array('uses'=>'articlesController@storeArticle','as'=>'storeArticle'));
Route::get('editArticle',array('uses'=>'articlesController@editArticle','as'=>'editArticle'));
Route::post('editArticle',array('uses'=>'articlesController@authArticle','as'=>'authArticle'));
Route::get('articleDashboard',array('uses'=>'articlesController@articleDashboard','as'=>'articleDashboard'));
Route::get('authorprofile',array('uses'=>'articlesController@authorProfile','as'=>'authorProfile'));
Route::get('authornews',array('uses'=>'articlesController@authorNews','as'=>'authornews'));
Route::get('authorAccount',array('uses'=>'articlesController@authorAccount','as'=>'authorAccount'));

Route::get('listArticle',array('uses'=>'articlesController@listArticle','as'=>'listArticle'));
Route::get('viewArticle/{id}',array('uses'=>'articlesController@viewArticle','as'=>'viewArticle'));
Route::get('viewArticleCategory/{id}',array('uses'=>'articlesController@viewArtCategory','as'=>'viewArticleCat'));
Route::get('delarticle/{id}',array('uses'=>'articlesController@deleteArticle','as'=>'delArticle'));
Route::get('search',array('uses'=>'articlesController@getSearch','as'=>'getSearch'));
Route::post('comment',array('uses'=>'articlesController@postComment','as'=>'comment'));
//log
Route::group(['before'=>'auth'], function()
	{
		Route::get('adminihome',array('uses'=>'UsersController@adminhomepage','as'=>'adminiHome'));
		Route::get('registeradmin',array('uses'=>'UsersController@signupadmin','as'=>'adminregister'));

		Route::post('registeradmin',array('uses'=>'UsersController@storeadmin','as'=>'adminstore'));
		Route::get('userdash',array('uses'=>'UsersController@userdash','as'=>'userdash'));
	});