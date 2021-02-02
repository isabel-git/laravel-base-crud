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

Route::get('/periph', 'PeripheralController@index') -> name('peripheral-index');
Route::get('/periph/{id}', 'PeripheralController@show') -> name('peripheral-show');