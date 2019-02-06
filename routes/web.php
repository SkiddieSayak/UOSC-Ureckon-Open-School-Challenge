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

Route::get('/','PublicController@home');
Route::get('/contact', 'PublicController@contact');
Route::get('/about', 'PublicController@about');
Route::post('/register', 'PublicController@register');
Route::get('/register', 'PublicController@showForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
