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

Route::get('/', 'GoodController@index');


Auth::routes();


Route::get('/contact', 'ContactController@index');
Route::get('/photos', 'PhotoController@index')->name('photo');
Route::get('/photos/($id)', 'PhotoController@view')->name('photo');


Route::prefix('admin')->middleware(['auth'])->group(function(){
    // admin goods
    Route::get('/goods', 'Admin\GoodsController@index')->name('goods.index');
    Route::get('/goods/create', 'Admin\GoodsController@create')->name('goods.create');
    Route::get('/goods/{id}', 'Admin\GoodsController@show')->name('goods.show');
    Route::get('/goods/edit/{id}', 'Admin\GoodsController@edit')->name('goods.edit');
    Route::post('/goods', 'Admin\GoodsController@store');
    Route::patch('/goods/{id}', 'Admin\GoodsController@update');
    Route::delete('/goods/{id}', 'Admin\GoodsController@destroy');

    // admin photos
    Route::get('/photos', 'Admin\PhotosController@index')->name('photos.index');
    Route::get('/photos/create', 'Admin\PhotosController@create')->name('photos.create');
    Route::get('/photos/{id}', 'Admin\PhotosController@show')->name('photos.show');
    Route::get('/photos/edit/{id}', 'Admin\PhotosController@edit')->name('photos.edit');
    Route::post('/photos', 'Admin\PhotosController@store');
    Route::patch('/photos/{id}', 'Admin\PhotosController@update');
    Route::delete('/photos/{id}', 'Admin\PhotosController@destroy');
});

Route::get('/comment', 'Admin\GoodsController@view');

Route::post('/admin/goods/{id}/comments', 'CommentsController@store');

