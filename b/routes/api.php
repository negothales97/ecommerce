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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'CategoryController@index');
        Route::post('', 'CategoryController@store');
        Route::get('{category}', 'CategoryController@show');
        Route::put('{category}', 'CategoryController@update');
        Route::delete('{category}', 'CategoryController@delete');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'ProductController@index');
        Route::post('', 'ProductController@store');
        Route::get('{product}', 'ProductController@show');
        Route::put('{product}', 'ProductController@update');
        Route::delete('{product}', 'ProductController@delete');
    });
    Route::group(['prefix' => 'contact'], function () {
        Route::get('', 'ContactController@index');
        Route::post('', 'ContactController@store');
        Route::get('{contact}', 'ContactController@show');
        Route::put('{contact}', 'ContactController@update');
        Route::delete('{contact}', 'ContactController@delete');
    });
});
