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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@index')->name('home');

Route::get('/goods', 'GoodController@index')->name('good');
Route::get('/goods/create', 'GoodController@create');
Route::post('/goods', 'GoodController@store');

Route::get('/photos', 'PhotoController@index')->name('photo');
Route::get('/photos/create', 'PhotoController@create');
Route::get('/photos/($id)', 'PhotoController@view')->name('photo');
