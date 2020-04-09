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

Route::get('/forgot-password', function () {
    return view('pages.forgot-password');
});
Route::post('forgot-password', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.forgot');

Route::get('reset-password', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('reset-password', 'Auth\ResetPasswordController@reset')->name('password.reset.post');

Route::get('account', function(){
    return view('pages.account');
});

Route::get('/login', function () {
    return view('pages.login');
});
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/product', 'Web\ProductListController@index');

Route::get('/registration', function () {
    return view('pages.registration');
});
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::post('info-edit', 'Auth\InformationController')->name('info.edit');
