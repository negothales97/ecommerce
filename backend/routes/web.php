<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'categoria', 'as' => 'category.'], function () {
        Route::get('/', 'Admin\CategoryController@index')->name('index');
        Route::get('/create', 'Admin\CategoryController@create')->name('create');
        Route::post('/store', 'Admin\CategoryController@store')->name('store');
        Route::get('/edit/{category}', 'Admin\CategoryController@edit')->name('edit');
        Route::put('/update/{category}', 'Admin\CategoryController@update')->name('update');
        Route::delete('/delete/{category}', 'Admin\CategoryController@delete')->name('delete');
    });
    Route::group(['prefix' => 'produtos', 'as' => 'product.'], function () {
        Route::get('/', 'Admin\ProductController@index')->name('index');
        Route::get('/create', 'Admin\ProductController@create')->name('create');
        Route::post('/store', 'Admin\ProductController@store')->name('store');
        Route::get('/edit/{product}', 'Admin\ProductController@edit')->name('edit');
        Route::put('/update/{product}', 'Admin\ProductController@update')->name('update');
        Route::delete('/delete/{product}', 'Admin\ProductController@delete')->name('delete');
        Route::group(['prefix' => '{product}/category', 'as' => 'category.'], function () {
            Route::post('/', 'Admin\ProductCategoryController@store')->name('store');
            Route::delete('/delete/{category}', 'Admin\ProductCategoryController@delete')->name('delete');
        });
        Route::group(['prefix' => '{product}/tag', 'as' => 'tag.'], function () {
            Route::post('/', 'Admin\ProductTagController@store')->name('store');
            Route::delete('/delete/{tag}', 'Admin\ProductTagController@delete')->name('delete');
        });
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('table-list', function () {
        return view('pages.table_list');
    })->name('table');

    Route::get('typography', function () {
        return view('pages.typography');
    })->name('typography');

    Route::get('icons', function () {
        return view('pages.icons');
    })->name('icons');

    Route::get('map', function () {
        return view('pages.map');
    })->name('map');

    Route::get('notifications', function () {
        return view('pages.notifications');
    })->name('notifications');

    Route::get('rtl-support', function () {
        return view('pages.language');
    })->name('language');

    Route::get('upgrade', function () {
        return view('pages.upgrade');
    })->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
