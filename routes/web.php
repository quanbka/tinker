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

Auth::routes();
Route::get('/', 'IndexController@home')->name('home');
Route::get('/{slug}-c{id}',
    'ProductController@category')->name('category')->where('slug', '[0-9a-zA-Z/_\-]+')->where('id', '[0-9]+');
Route::get('/search',
    'ProductController@search')->name('search');
Route::get('/{slug}-p{id}',
    'ProductController@product')->name('product')->where('slug', '[0-9a-zA-Z/_\-]+')->where('id', '[0-9]+');
Route::get('/tin-tuc',
    'PostController@allPostList')->name('news');
Route::get('/{slug}-a{id}',
    'PostController@postList')->name('archive')->where('slug', '[0-9a-zA-Z/_\-]+')->where('id', '[0-9]+');
Route::get('/{slug}-n{id}',
    'PostController@post')->name('post')->where('slug', '[0-9a-zA-Z/_\-]+')->where('id', '[0-9]+');

Route::get('/cart', 'CartController@cart');
Route::post('/cart/{productId}/{productSkuId?}', 'CartController@addToCart');
Route::get('/checkout', 'CartController@checkout');
Route::post('/order', 'CartController@order');
Route::get('/success', 'CartController@success');
