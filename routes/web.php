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
Route::get('/SignIn', ['as'=>'SignIn', 'uses'=>'UserAuthController@SignIn']);
Route::get('/Registration', ['as'=>'Registration', 'uses'=>'UserAuthController@Registration']);
Route::get('/News', ['as'=>'News', 'uses'=>'UserAuthController@News']);
Route::get('/gallery', ['as'=>'gallery', 'uses'=>'UserAuthController@gallery']);
Route::get('/avatarEdit', ['as'=>'avatarEdit', 'uses'=>'FilleLoadController@avatarEdit']);



