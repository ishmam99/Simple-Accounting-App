<?php

use Illuminate\Support\Facades\Route;

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


Route::get('index','AccountController@index')->name('index');
Route::get('create','AccountController@create')->name('create.account');

Route::post('store','AccountController@store')->name('store.account');

Route::get('show{id}','AccountController@show')->name('show.account');
Route::get('edit/account/{id}','AccountController@Edit');

Route::post('update/account/{id}','AccountController@update');
Route::get('delete/account/{id}','AccountController@delete');