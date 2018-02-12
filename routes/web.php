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

Route::get('/', 'HomeController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/product/add', 'AdminController@create');
Route::post('/admin/product/store', 'AdminController@store');
Route::get('/admin/product/show/{id}', 'AdminController@show');
Route::get('/admin/product/edit/{id}', 'AdminController@edit');
Route::post('/admin/product/update/{id}', 'AdminController@update');
Route::get('/admin/product/delete/{id}', 'AdminController@destroy');
