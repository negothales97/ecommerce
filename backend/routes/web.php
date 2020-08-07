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
    return view('customer.pages.home.index');
});

Route::get('/contato', 'Customer\ContactController@index')->name('contact');
Route::post('/contato', 'Customer\ContactController@store')->name('contact');

Route::get('/categoria/{slug}')->name('category');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
    Route::post('/login', 'AdminAuth\LoginController@login');
    Route::get('/register', 'Auth\RegisterController@showAdminRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\RegisterController@createAdmin');
    Route::post('/logout', 'Auth\RegisterController@logout')->name('admin.logout');
});

Route::get('/login/customer', 'Auth\LoginController@showCustomerLoginForm');
Route::get('/register/customer', 'Auth\RegisterController@showCustomerRegisterForm');
Route::post('/login/customer', 'Auth\LoginController@customerLogin');
Route::post('/register/customer', 'Auth\RegisterController@createCustomer');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
    // Contao
    Route::group(['prefix' => 'contato', 'as' => 'contact.'], function () {
        Route::get('/', 'Admin\ContactController@index')->name('index');
        Route::get('/edit/{contact}', 'Admin\ContactController@edit')->name('edit');
        Route::put('/update/{contact}', 'Admin\ContactController@update')->name('update');
        Route::delete('/delete/{contact}', 'Admin\ContactController@delete')->name('delete');
    });
    Route::group(['prefix' => 'newsletter', 'as' => 'newsletter.'], function () {
        Route::get('/', 'Admin\NewsletterController@index')->name('index');
        Route::delete('/delete/{newsletter}', 'Admin\NewsletterController@delete')->name('delete');
    });
    // Categorias
    Route::group(['prefix' => 'catalogo'], function () {
        Route::group(['prefix' => 'categoria', 'as' => 'category.'], function () {
            Route::get('/', 'Admin\CategoryController@index')->name('index');
            Route::get('/create', 'Admin\CategoryController@create')->name('create');
            Route::post('/store', 'Admin\CategoryController@store')->name('store');
            Route::get('/edit/{category}', 'Admin\CategoryController@edit')->name('edit');
            Route::put('/update/{category}', 'Admin\CategoryController@update')->name('update');
            Route::delete('/delete/{category}', 'Admin\CategoryController@delete')->name('delete');
        });

        // Subcategorias
        Route::group(['prefix' => 'subcategoria', 'as' => 'subcategory.'], function () {
            Route::post('/store', 'Admin\SubcategoryController@store')->name('store');
            Route::delete('/delete/{subcategory}', 'Admin\SubcategoryController@delete')->name('delete');
        });
        // Tags
        Route::group(['prefix' => 'tag', 'as' => 'tag.'], function () {
            Route::get('/', 'Admin\TagController@index')->name('index');
            Route::get('/create', 'Admin\TagController@create')->name('create');
            Route::post('/store', 'Admin\TagController@store')->name('store');
            Route::get('/edit/{tag}', 'Admin\TagController@edit')->name('edit');
            Route::put('/update/{tag}', 'Admin\TagController@update')->name('update');
            Route::delete('/delete/{tag}', 'Admin\TagController@delete')->name('delete');
        });

        Route::group(['prefix' => 'variacao', 'as' => 'variation.'], function () {
            Route::get('/', 'Admin\VariationController@index')->name('index');
            Route::get('/create', 'Admin\VariationController@create')->name('create');
            Route::post('/store', 'Admin\VariationController@store')->name('store');
            Route::get('/edit/{variation}', 'Admin\VariationController@edit')->name('edit');
            Route::put('/update/{variation}', 'Admin\VariationController@update')->name('update');
            Route::delete('/delete/{variation}', 'Admin\VariationController@delete')->name('delete');

            Route::group(['prefix' => 'option', 'as' => 'option.'], function () {
                Route::post('store/', 'Admin\VariationOptionController@store')->name('store');
                Route::put('update/{option}', 'Admin\VariationOptionController@update')->name('update');
                Route::delete('delete/{option}', 'Admin\VariationOptionController@delete')->name('delete');
            });
        });
        // Produtos
        Route::group(['prefix' => 'produtos', 'as' => 'product.'], function () {
            Route::get('/', 'Admin\ProductController@index')->name('index');
            Route::get('/create', 'Admin\ProductController@create')->name('create');
            Route::post('/store', 'Admin\ProductController@store')->name('store');
            Route::get('/edit/{product}', 'Admin\ProductController@edit')->name('edit');
            Route::put('/update/{product}', 'Admin\ProductController@update')->name('update');
            Route::delete('/delete/{product}', 'Admin\ProductController@delete')->name('delete');
            // Imagem do produto
            Route::group(['prefix' => 'image', 'as' => 'image.'], function () {
                Route::get('list/{id}', 'Admin\ProductImageController@list')->name('list');
                Route::post('sort/', 'Admin\ProductImageController@sort')->name('sort');
                Route::post('/', 'Admin\ProductImageController@store')->name('store');
                Route::delete('/delete/{image}', 'Admin\ProductImageController@delete')->name('delete');
            });
            // Categoria do Produto
            Route::group(['prefix' => '{product}/category', 'as' => 'category.'], function () {
                Route::post('/', 'Admin\ProductCategoryController@store')->name('store');
                Route::delete('/delete/{category}', 'Admin\ProductCategoryController@delete')->name('delete');
            });
            // Variação do produto
            Route::group(['prefix' => '{product}/variation', 'as' => 'variation.'], function () {
                Route::post('/', 'Admin\ProductVariationController@store')->name('store');
                Route::delete('/delete/{variation}', 'Admin\ProductVariationController@delete')->name('delete');
            });
            // Subproduto
            Route::group(['prefix' => '{product}/subproduct', 'as' => 'subproduct.'], function () {
                Route::post('/', 'Admin\SubproductController@store')->name('store');
                Route::delete('/delete/{subproduct}', 'Admin\SubproductController@delete')->name('delete');
                Route::group(['prefix' => 'image', 'as' => 'image.'], function () {
                    Route::post('/', 'Admin\SubproductImageController@store')->name('store');
                });
            });
        });
    });
});
