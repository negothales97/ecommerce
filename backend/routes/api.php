<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('newsletter', 'Api\NewsletterController@store')->name('api.newsletter');
Route::get('category', 'Api\CategoryController@index')->name('api.category.index');
Route::get('variation', 'Api\VariationController@index')->name('api.variation.index');
Route::get('variation/{variation}/', 'Api\VariationController@show')->name('api.variation.show');
Route::get('subproduct/{resource}/', 'Api\SubproductController@show')->name('api.subproduct.show');

