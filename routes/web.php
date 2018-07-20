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

// admin goods
Route::get('/admin', 'Admin\GoodsController@index');
Route::get('/admin/goods/create', 'Admin\GoodsController@create');
Route::get('/admin/goods/{id}', 'Admin\GoodsController@show');
Route::get('/admin/goods/edit/{id}', 'Admin\GoodsController@edit');
Route::post('/admin/goods', 'Admin\GoodsController@store');
Route::patch('/admin/goods/{id}', 'Admin\GoodsController@update')->name('goods.update');
Route::delete('/admin/goods/{id}', 'Admin\GoodsController@destroy')->name('goods.destroy');

// admin photos
Route::get('/admin/photos', 'Admin\PhotosController@index');
Route::get('/admin/photos/create', 'Admin\PhotosController@create');
Route::get('/admin/photos/{id}', 'Admin\PhotosController@show');
Route::get('/admin/photos/edit/{id}', 'Admin\PhotosController@edit');
Route::post('/admin/photos', 'Admin\PhotosController@store');
Route::patch('/admin/photos/{id}', 'Admin\PhotosController@update')->name('photos.update');
Route::delete('/admin/photos/{id}', 'Admin\PhotosController@destroy')->name('photos.destroy');
