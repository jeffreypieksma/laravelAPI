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

//localhost/api/articles?api_token=7ae54b011a2eea894d30f77ee4378b7345d3895786addb17df03047c69d9


Route::group(['middleware' => 'auth:api'], function () {

	//User
	Route::get('user', function (Request $request){
		return $request->user();
	});

  //Article list
	Route::get('articles', 'ArticleController@index');

	//Single article
	Route::get('article/{id}', 'ArticleController@show');

	//Create new article
	Route::post('article', 'ArticleController@store');

	//Update article 
	Route::put('article', 'ArticleController@store');

	//Delete article
	Route::delete('article/{id}', 'ArticleController@destroy');
});