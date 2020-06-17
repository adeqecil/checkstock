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

Route::get('/', 'LoginController@index');

Route::get('product', 'ProductsController@index');
Route::get('addproduct', 'ProductsController@create');
Route::get('product/{product}/editproduct', 'ProductsController@edit');
Route::post('product', 'ProductsController@store');
Route::delete('product/{product}', 'ProductsController@destroy');

Route::get('user', 'UserController@index');
Route::get('adduser', 'UserController@create');
Route::get('edituser/{product}/edituser', 'UserController@edit');
Route::post('user', 'UserController@store');
Route::delete('user/{user}', 'UserController@destroy');
