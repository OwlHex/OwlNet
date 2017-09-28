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

Route::get('/', function () {return view('welcome');});


Route::get('/SignIn', ['as'=>'SignIn', 'uses'=>'UserAuthController@SignIn']);
Route::get('/SignUp', ['as'=>'SignUp', 'uses'=>'UserAuthController@SignUp']);


