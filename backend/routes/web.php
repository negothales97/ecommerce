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

Route::get('/', 'Customer\HomeController@index')->name('home');

Route::get('categoria/{slug}', 'Customer\CategoryController@index')->name('category');

Route::get('produto/{slug}', 'Customer\ProductController@index')->name('product');

Route::get('/contato', 'Customer\ContactController@index')->name('contact');
Route::post('/contato', 'Customer\ContactController@store')->name('contact');

Route::group(['prefix' => 'carrinho', 'as' => 'cart.'], function(){
    Route::get('/', 'Customer\CartController@index')->name('index');
    Route::get('/delete', 'Customer\CartController@delete')->name('delete.product');
    Route::post('/', 'Customer\CartController@store')->name('store');
    Route::get('checkout/', 'Customer\CheckoutController@index')->name('checkout.index');
    Route::get('checkout/email', 'Customer\CheckoutController@email')->name('checkout.email');
    Route::post('checkout/', 'Customer\CheckoutController@store')->name('checkout.store');
});


Route::get('/checkout1', function () {
    return view('customer.pages.checkout.checkout1');
});

Route::get('/checkout2', function () {
    return view('customer.pages.checkout.checkout2');
});

// Admin
Route::group(['prefix' => 'admin', 'namespace' => 'AdminAuth'], function () {
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout')->name('admin.logout');
    // Route::get('/register', 'Auth\RegisterController@showAdminRegisterForm')->name('admin.register');
    // Route::post('/register', 'Auth\RegisterController@register');
});
// Custoemr
Route::group(['prefix' => 'customer', 'namespace' => 'CustomerAuth'], function () {
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@login');
    Route::get('/register', 'RegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'RegisterController@register');
    Route::get('/logout', 'LoginController@logout')->name('customer.logout');
});

// Route::get('/login/customer', 'Auth\LoginController@showCustomerLoginForm');
// Route::get('/register/customer', 'Auth\RegisterController@showCustomerRegisterForm');
// Route::post('/login/customer', 'Auth\LoginController@customerLogin');
// Route::post('/register/customer', 'Auth\RegisterController@createCustomer');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
    // Contato
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

    // Clientes
    Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
        Route::get('/', 'Admin\CustomerController@index')->name('index');
        Route::get('/create', 'Admin\CustomerController@create')->name('create');
        Route::post('/store', 'Admin\CustomerController@store')->name('store');
        Route::get('/edit/{customer}', 'Admin\CustomerController@edit')->name('edit');
        Route::put('/update/{customer}', 'Admin\CustomerController@update')->name('update');
        Route::delete('/delete/{customer}', 'Admin\CustomerController@delete')->name('delete');
    });
    // Catálogo
    Route::group(['prefix' => 'catalogo'], function () {
        // Categorias
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
                Route::delete('/delete/{file}', 'Admin\ProductImageController@delete')->name('delete');
            });
            // Categoria do Produto
            Route::group(['prefix' => '{product}/category', 'as' => 'category.'], function () {
                Route::post('/', 'Admin\ProductCategoryController@store')->name('store');
                Route::get('/change/{category}', 'Admin\ProductCategoryController@change')->name('change');
                Route::delete('/delete/{category}', 'Admin\ProductCategoryController@delete')->name('delete');
            });
            // Variação do produto
            Route::group(['prefix' => '{product}/variation', 'as' => 'variation.'], function () {
                Route::post('/', 'Admin\ProductVariationController@store')->name('store');
                Route::post('change/', 'Admin\ProductVariationController@change')->name('change');
                Route::delete('/delete/{variation}', 'Admin\ProductVariationController@delete')->name('delete');
            });
            // Subproduto
            Route::group(['prefix' => '{product}/subproduct', 'as' => 'subproduct.'], function () {
                Route::post('/', 'Admin\SubproductController@store')->name('store');
                Route::get('/change/{subproduct}', 'Admin\SubproductController@change')->name('change');
                Route::put('update/', 'Admin\SubproductController@update')->name('update');
                Route::delete('/delete/{subproduct}', 'Admin\SubproductController@delete')->name('delete');
                Route::group(['prefix' => 'image', 'as' => 'image.'], function () {
                    Route::post('/', 'Admin\SubproductImageController@store')->name('store');
                });
            });
        });
    });
});
