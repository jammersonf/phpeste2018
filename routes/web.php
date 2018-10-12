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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phpeste/{ano?}/{local?}', 'PHPesteController@index');

Route::get('/user/{id?}', 'PHPesteController@user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@all');
Route::get('/post/create', 'PostController@create');
Route::post('/post/store', 'PostController@store');
