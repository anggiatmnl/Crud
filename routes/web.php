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

Route::resource('buku', 'BukuController');

Route::get('/', 'BukuController@index');
Route::get('/create', 'BukuController@create');

Route::post('/input', 'BukuController@store');
Route::get('/view/{id}', 'BukuController@view');