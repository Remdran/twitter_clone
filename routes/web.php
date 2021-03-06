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

Route::get('/', 'TweetController@index');

Route::get('/tweets/{tweet}', 'TweetController@show');
Route::get('/home', 'TweetController@index');

Route::post('/tweets/{tweet}/replies', 'ReplyController@store');
