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

Route::get('/', 'Web\HomeController');
Route::get('/abouts', 'Web\HomeController');
Route::get('/products', 'Web\HomeController');
Route::get('/services', 'Web\HomeController');
Route::get('/news', 'Web\HomeController');
Route::get('/contacts', 'Web\HomeController');
