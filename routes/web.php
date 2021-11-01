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
Route::get('/{slug}-c{id}.html',
    'ProductController@category')->name('category')->where('slug', '[0-9a-zA-Z/_\-]+')->where('id', '[0-9]+');
Route::get('/search',
    'ProductController@search')->name('search');
Route::get('/{slug}-p{id}.html',
    'ProductController@product')->name('product')->where('slug', '[0-9a-zA-Z/_\-]+')->where('id', '[0-9]+');
Route::get('/tin-tuc.html',
    'PostController@allPostList')->name('news');
Route::get('/{slug}-a{id}.html',
    'PostController@postList')->name('archive')->where('slug', '[0-9a-zA-Z/_\-]+')->where('id', '[0-9]+');
Route::get('/{slug}-n{id}.html',
    'PostController@post')->name('post')->where('slug', '[0-9a-zA-Z/_\-]+')->where('id', '[0-9]+');
