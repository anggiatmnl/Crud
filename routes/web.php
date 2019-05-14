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

Route::get('/', 'BukuController@index');

Route::get('/create', 'BukuController@create');

Route::get('/edit', 'BukuController@edit');

Route::post('/input', 'BukuController@store');

Route::patch('/{id}', 'BukuController@update');

Route::get('/view/{id}', 'BukuController@view');

Route::get('/destroy/{id}', 'BukuController@destroy');