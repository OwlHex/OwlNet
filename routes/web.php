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

Route::get('/', ['as'=>'/', 'uses'=>'UserAuthController@home', 'middleware' => 'auth']);

Route::get('/News', ['as'=>'News', 'uses'=>'UserAuthController@News']);
Route::get('/gallery', ['as'=>'gallery', 'uses'=>'UserAuthController@gallery']);
// Route::any('/avatarEdit', ['as'=>'avatarEdit', 'uses'=>'FilleLoadController@testing']);
Route::any('/avatarEdit1', ['as'=>'avatarEdit1', 'uses'=>'FilleLoadController@testing1']);
// Route::any('/infoEdit', ['as'=>'infoEdit', 'uses'=>'FilleLoadController@infoEdit']);
// Route::post('/avatarEdit1', 'FilleLoadController@testing1');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
