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
Route::get('/goods/{id}', 'GoodController@show')->name('auto.show');

Route::get('/order', 'OrdersController@create');
Route::post('/order', 'OrdersController@store');
Route::post('/test_drive', 'Admin\GoodsController@testDrive')->name('test.drive');

Auth::routes();


Route::get('/contact', 'ContactController@index');
Route::get('/photos', 'PhotoController@index')->name('photo');
Route::get('/photos/($id)', 'PhotoController@view')->name('photo.view');
Route::get('/category/{slug}', 'CategoryController@category');


Route::prefix('admin')->middleware(['auth', 'checkAdmin'])->group(function(){

    Route::prefix('goods')->group(function (){
        Route::get('/', 'Admin\GoodsController@index')->name('goods.index');
        Route::get('/create', 'Admin\GoodsController@create')->name('goods.create');
        Route::get('/{id}', 'Admin\GoodsController@show')->name('goods.show');
        Route::get('/edit/{goods}', 'Admin\GoodsController@edit')->name('goods.edit');
        Route::post('/', 'Admin\GoodsController@store');
        Route::patch('/{goods}', 'Admin\GoodsController@update')->name('goods.update');
        Route::delete('/{id}', 'Admin\GoodsController@destroy');
        Route::post('/{id}/photo', 'Admin\PhotosController@attach');
        Route::post('/{id}/shop', 'ShopController@attach');
        Route::post('/{id}/comments', 'CommentsController@store');
    });

    Route::prefix('photos')->group(function (){
        Route::get('/', 'Admin\PhotosController@index')->name('photos.index');
        Route::get('/create', 'Admin\PhotosController@create')->name('photos.create');
        Route::get('/{id}', 'Admin\PhotosController@show')->name('photos.show');
        Route::get('/edit/{id}', 'Admin\PhotosController@edit')->name('photos.edit');
        Route::post('/', 'Admin\PhotosController@store');
        Route::patch('/{id}', 'Admin\PhotosController@update')->name('photos.update');
        Route::delete('/{id}', 'Admin\PhotosController@destroy');
    });

    Route::prefix('category')->group(function (){
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::get('/create', 'CategoryController@create')->name('category.create');
        Route::get('/{id}', 'CategoryController@show')->name('category.show');
        Route::get('/edit/{category}', 'CategoryController@edit')->name('category.edit');
        Route::post('/', 'CategoryController@store');
        Route::patch('/{id}', 'CategoryController@update')->name('category.update');
        Route::delete('/{category}', 'CategoryController@destroy');
    });

});




