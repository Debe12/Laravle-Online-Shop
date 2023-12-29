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
Route::get('/', '\App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('about', '\App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/products', '\App\Http\Controllers\ProductController@index')->name("product.index");

Route::get('/products/{id}', '\App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/cart', '\App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/delete', '\App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::get('/cart/add/{id}', '\App\Http\Controllers\CartController@add')->name("cart.add");

// Route::get('/admin', '\App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");

// Route::get('/admin/products', '\App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");

// Route::post('/admin/products/store', '\App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");

// Route::get('/admin/products/create', '\App\Http\Controllers\Admin\AdminProductController@create')->name("admin.product.create");

// Route::delete('/admin/products/{id}/delete', '\App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");

// Route::get('/admin/products/{id}/edit', '\App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");

// Route::put('/admin/products/{id}/update', '\App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");



// Auth::routes();
// Route::get('/register', '\App\Http\Controllers\RegisterController@create')->name("admin.index");
// // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['hasrole:admin'])->group(function(){

    Route::get('/admin', '\App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");

    Route::get('/admin/products', '\App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    
    Route::post('/admin/products/store', '\App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    
    Route::get('/admin/products/create', '\App\Http\Controllers\Admin\AdminProductController@create')->name("admin.product.create");
    
    Route::delete('/admin/products/{id}/delete', '\App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    
    Route::get('/admin/products/{id}/edit', '\App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    
    Route::put('/admin/products/{id}/update', '\App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
    Route::get('/language/{locale}', '\App\Http\Controllers\LocalizationController@changlocal')->name("locale");
    Route::get("admin/test", function(){
        return "you are here";
    })->middleware(['hasrole:admin']); 
});

    Route::midleware('auth')->group(function() {
        Route::get('/cart/purchase','\App\Http\Controllers\CartController@purchase')->name("cart.purchase");
    }); 



Auth::routes();
Route::middleware(['hasrole:admin'])->group(function(){
    Route::put('/cart/purchase', '\App\Http\Controllers\CartController@purchase')->name("cart.purchase");
});

Route::get('/{locale?}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }
    $viewData = [];
 
 
    $viewData["title"] = "Home Page - Online Store";
 
 
    return view('home.index')->with("viewData", $viewData);
 
 
 });
 