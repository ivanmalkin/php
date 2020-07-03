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

Route::get('/', 'ProductsController@index');
Route::get('/edit/{id}', 'ProductsController@edit');
Route::post('/edit/{id}', 'ProductsController@editAction')->name('editAction');
Route::get('/delete/{id}', 'ProductsController@delete');
Route::get('/add-to-cart/{id}', 'CardController@addToCard');
Route::get('/card', 'CardController@index');

