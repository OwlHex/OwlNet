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

//Route::get('/', function () {return view('welcome');});

Route::get('/', ['as'=>'/', 'uses'=>'UserAuthController@home']);
Route::get('/logout', ['as'=>'logout', 'uses'=>'UserAuthController@logout']);
// Route::get('/SignIn', ['as'=>'register', 'uses'=>'AuthController@register']);
Route::get('/register', ['as'=>'register', 'uses'=>'RegisterController@create']);
// Route::get('/login', ['as'=>'login', 'uses'=>'LoginController@create']);


Route::get('/News', ['as'=>'News', 'uses'=>'UserAuthController@News']);
Route::get('/gallery', ['as'=>'gallery', 'uses'=>'UserAuthController@gallery']);
Route::any('/avatarEdit', ['as'=>'avatarEdit', 'uses'=>'FilleLoadController@testing']);






