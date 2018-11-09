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

Route::group(['middleware' => 'api'], function () {

	//User
	Route::get('user', function (Request $request){
		return $request->user();
	});

	Route::post('login', 'UserController@authenticate');
	Route::post('logout', 'UserController@logout');
	Route::post('user/details', 'UserController@getUserDetails');

  	//Article list
	Route::get('articles', 'ArticleApiController@index');

	//Single article
	Route::get('article/{id}', 'ArticleApiController@show');

	//Create new article
	Route::post('article/store', 'ArticleApiController@store');

	//Update article 
	Route::put('article/update', 'ArticleApiController@update');

	//Delete article
	Route::delete('article/{id}', 'ArticleApiController@destroy');
});