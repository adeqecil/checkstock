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

Route::get('/', 'LoginController@index')->name('masuk');
//tambahan
Route::post('auth','LoginController@authenticate');
Route::get('product', 'ProductsController@index')->middleware('auth');
Route::get('addproduct', 'ProductsController@create')->middleware('auth');
Route::get('product/{product}/editproduct', 'ProductsController@edit')->middleware('auth');
//tambahan
Route::post('product/{product}/update','ProductsController@update')->middleware('auth');
Route::post('product', 'ProductsController@store')->middleware('auth');
Route::delete('product/{product}', 'ProductsController@destroy')->middleware('auth');

Route::get('user', 'UserController@index')->middleware('auth');
Route::get('adduser', 'UserController@create')->middleware('auth');
Route::get('user/{user}/edituser', 'UserController@edit')->middleware('auth');
//tambahan
Route::post('user/{user}/update', 'UserController@update')->middleware('auth');
Route::post('user', 'UserController@store')->middleware('auth');
Route::delete('user/{user}', 'UserController@destroy')->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');