<?php

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
Route::get('/','HomeController@index')->name('index');

Route::group(['prefix' => 'products'], function () {

    Route::get('/','ProductController@index')->name('products.list');

    Route::get('/create','ProductController@create')->name('products.create');

    Route::post('/create','ProductController@store')->name('products.store');

    Route::get('/{id}/edit','ProductController@edit')->name('products.edit');

    Route::post('/{id}/edit','ProductController@update')->name('products.update');

    Route::get('/{id}/destroy','ProductController@destroy')->name('products.destroy');

    Route::get('/filter','ProductController@filterByCategory')->name('products.filterByCategory');

    Route::get('/search','ProductController@search')->name('products.search');


});

Route::group(['prefix' => 'categories'], function () {

    Route::get('/','CategoryController@index')->name('categories.index');

    Route::get('/create','CategoryController@create')->name('categories.create');

    Route::post('/create','CategoryController@store')->name('categories.store');

    Route::get('/{id}/edit','CategoryController@edit')->name('categories.edit');

    Route::post('/{id}/edit','CategoryController@update')->name('categories.update');

    Route::get('/{id}/destroy','CategoryController@destroy')->name('categories.destroy');

    Route::get('/filter','CategoryController@filterByCity')->name('categories.filterByCity');

    Route::get('/search','CategoryController@search')->name('categories.search');


});


Route::group(['prefix' => 'users'], function () {

    Route::get('/','ProductController@index')->name('users.index');

    Route::get('/create','ProductController@create')->name('users.create');

    Route::post('/create','ProductController@store')->name('users.store');

    Route::get('/{id}/edit','ProductController@edit')->name('users.edit');

    Route::post('/{id}/edit','ProductController@update')->name('users.update');

    Route::get('/{id}/destroy','ProductController@destroy')->name('users.destroy');

    Route::get('/filter','ProductController@filterByCity')->name('users.filterByCity');

    Route::get('/search','ProductController@search')->name('users.search');


});


Route::group(['prefix' => 'shop'], function () {
    Route::get('/','ShopController@index')->name('shop.index');
    Route::get('/{id}/details','ShopController@details')->name('shop.details');
    Route::get('/{id}/cart','ShopController@cart')->name('shop.cart');
    Route::get('/header','ShopController@showcategory')->name('shop.showcategory');
});

