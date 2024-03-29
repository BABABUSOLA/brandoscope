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
// Route::get('/', function()
// {
// 	return View::make('hello');
// });
//users section
Route::get('/',array('uses'=>'HomeController@index', 'as'=>'freepage'));

Route::get('login',array('uses'=>'UsersController@login', 'as'=> 'login'));
// Route::post('postlogin',array('uses'=>'UsersController@postlogin', 'as'=> 'postlogin'));
Route::post('login',array('uses'=>'UsersController@authenticate','as'=>'authenticate'));

Route::get('logout',array('uses'=>'UsersController@logout', 'as'=>'logout'));

Route::get('landing',array('uses'=>'HomeControlleyr@landingpage','as'=>'landingpage'));

Route::get('register',array('uses'=>'UsersController@signup','as'=>'register'));

Route::post('register',array('uses'=>'UsersController@store','as'=>'store'));
Route::get('adminregister',array('uses'=>'UsersController@registerAdmin', 'as'=>'RegisterAdmin'));
Route::get('home',array('uses'=>'UsersController@homepage2', 'as'=>'home'));
//admin section
Route::get('adminLogin',array('uses'=>'UsersController@adminLogin', 'as'=>'adminLogin'));
Route::get('adminhome',array('uses'=>'UsersController@homepage','as'=>'adminHome'));

// password remind and reset section
Route::get('remind', array('uses' => 'RemindersController@getRemind', 'as' => 'getRemind'));
Route::post('remind', array('uses' => 'RemindersController@postRemind', 'as' => 'postRemind'));
Route::get('password/reset/{token}', array('uses' => 'RemindersController@getReset', 'as' => 'getReset'));
Route::post('password/reset/{token}', array('uses' => 'RemindersController@postReset', 'as' => 'postReset'));

Route::get('contact',array('uses'=>'ContactsController@getContacts','as'=>'contact'));
Route::post('contact_request',array('uses'=>'ContactsController@getContactUsForm','as'=>'contactUs'));
//log
Route::group(['before'=>'auth'], function()
	{
Route::post('registeradmincont',array('uses'=>'UsersController@admincont','as'=>'adminRegCont'));
Route::get('viewarticleadmin/{id}',array('uses'=>'UsersController@viewArticleAdmin','as'=>'viewArticleAdmin'));
Route::get('getsearchadmin',array('uses'=>'UsersController@getSearchAdmin','as'=>'getSearchAdmin'));
Route::post('storeprofile',array('uses'=>'UsersController@storeprofile','as'=>'storeprofile'));
// Route::post('authorstoreprofile',array('uses'=>'articlesController@storeprofileauthor','as'=>'Authorstoreprofile'));
//user view
Route::get('useraccount',array('uses'=>'UsersController@useraccount','as'=>'useraccount'));
Route::get('usersearch',array('uses'=>'UsersController@usersearch','as'=>'userSearch'));
Route::get('userviewarticle/{id}',array('uses'=>'UsersController@userviewArticle','as'=>'userviewArt'));
//authors section

Route::get('newArticle',array('uses'=>'articlesController@newArticle','as'=>'newArticle'));
Route::post('newArticle',array('uses'=>'articlesController@storeArticle','as'=>'storeArticle'));
Route::get('editArticle/{id}',array('uses'=>'articlesController@editArticle','as'=>'editArticle'));
Route::post('updateArticle/{id}',array('uses'=>'articlesController@authArticle','as'=>'updateArticle'));
Route::get('articleDashboard',array('uses'=>'articlesController@articleDashboard','as'=>'articleDashboard'));
Route::get('authorprofile',array('uses'=>'articlesController@authorProfile','as'=>'authorProfile'));
Route::get('authornews',array('uses'=>'articlesController@authorNews','as'=>'authornews'));
Route::get('authorAccount',array('uses'=>'articlesController@authorAccount','as'=>'authorAccount'));
Route::get('listArticle',array('uses'=>'articlesController@listArticle','as'=>'listArticle'));
Route::get('viewArticle/{id}',array('uses'=>'articlesController@viewArticle','as'=>'viewArticle'));
Route::get('delarticle/{id}',array('uses'=>'articlesController@deleteArticle','as'=>'delArticle'));
Route::get('search',array('uses'=>'articlesController@getSearch','as'=>'getSearch'));
Route::post('comment',array('uses'=>'articlesController@postComment','as'=>'comment'));
		
		Route::get('adminihome',array('uses'=>'UsersController@adminhomepage','as'=>'adminiHome'));
		Route::get('registeradmin',array('uses'=>'UsersController@signupadmin','as'=>'adminregister'));
		Route::post('registeradmin',array('uses'=>'UsersController@storeadmin','as'=>'adminstore'));
		Route::get('userdash',array('uses'=>'UsersController@userdash','as'=>'userdash'));
		Route::get('viewArticleCategory/{id}',array('uses'=>'articlesController@viewArtCategory','as'=>'viewArticleCat'));
		Route::get('userviewArticleCategory/{id}',array('uses'=>'UsersController@viewArticleCategory','as'=>'userViewArticleCat'));
		
	});
// pinned articles
		Route::get('pinnednews/{id}',array('uses'=>'articlesController@pinnedNews','as'=>'pinnedNews'));
		Route::get('unpinnednews/{id}',array('uses'=>'articlesController@unpinnedNews','as'=>'unpinnedNews'));
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');