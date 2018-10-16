<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function () {

	//User
	Route::get('user', function (Request $request){
		return $request->user();
	});

	

	Route::post('login', 'UserController@authenticate');
	Route::post('logout', 'UserController@logout');
	Route::post('user/details', 'UserController@getUserDetails');

  //Article list
	Route::get('articles', 'ArticleController@index');

	//Single article
	Route::get('article/{id}', 'ArticleController@show');

	//Create new article
	Route::post('article/store', 'ArticleController@store');

	//Update article 
	Route::put('article/update', 'ArticleController@update');

	//Delete article
	Route::delete('article/{id}', 'ArticleController@destroy');
});