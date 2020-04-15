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

Route::get('search', 'Web\SearchController')->name('search');

Route::get('/contact', 'Web\ContactController@index');
Route::post('/contact', 'Web\ContactController@store');

Route::get('/product/{slug}', 'Web\ProductDetailController@show');
Route::get('/product', 'Web\ProductListController@index');

Route::get('/forgot-password', function () {
    return view('pages.forgot-password');
});
