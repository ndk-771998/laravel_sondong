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

Route::get('search','Web\SearchController')->name('search');

Route::get('/about', function(){
    return view('pages.about');
});
Route::get('/cart', function(){
    return view('pages.cart');
});
Route::get('/contact', function(){
    return view('pages.contact');
});
Route::get('/product/{slug}','Web\ProductDetailController@show');

Route::get('/forgot-password', function(){
    return view('pages.forgot-password');
});
Route::get('/login', function(){
    return view('pages.login');
});
Route::get('/new-detail', function(){
    return view('pages.new-detail');
});
Route::get('/news', function(){
    return view('pages.news');
});

Route::get('/product','Web\ProductListController@index');

Route::get('/registration', function(){
    return view('pages.registration');
});

Route::get('/service', function(){
    return view('pages.service');
});

