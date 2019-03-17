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

Route::get('/','AlbumsCtrl@index');

Route::resource('albums','AlbumsCtrl');

Route::resource('photos','PhotosCtrl');

Route::get('/photos/create/{id}','PhotosCtrl@create');
