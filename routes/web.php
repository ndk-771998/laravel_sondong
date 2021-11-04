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
Route::get('/trang-chu', 'Web\HomeController');

Route::get('/chuong-trinh-truyen-thanh','Web\AudioListController@view');

Route::get('/chuong-trinh-truyen-thanh-chi-tiet','Web\AudioListController@viewdetail');
Route::get('/television-detail', function () {
    return view('pages.televisoin-detail');
});