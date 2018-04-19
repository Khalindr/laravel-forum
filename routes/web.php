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

Route::get('/', 'CategoryController@index')->name('home');
Route::get('/showMessages/{category}','CategoryController@showMessages');

//Route::get('/{id}', 'CategoryController@show')->name('category-list');

Route::resource('messages', 'MessageController');

//Route::get('/messages/edit/{id}','MessageController@edit');
//
//Route::get('/messages/update','MessageController@update');

Route::resource('comments', 'CommentController');

Route::resource('files', 'FileController');

Route::resource('categories', 'CategoryController');

//Route::get('/categories/edit/{id}','CategoryController@edit');
//
//Route::get('/categories/update','CategoryController@update');
//
//Route::get('/categories/delete/{id}','CategoryController@destroy');