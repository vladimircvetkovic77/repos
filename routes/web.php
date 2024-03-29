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

Route::resource('topics', 'TopicController');
Route::resource('adresses', 'AdressController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
