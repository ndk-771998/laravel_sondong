<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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

Route::get('/chuong-trinh-truyen-thanh','Web\AudioListController@view');

Route::get('/chuong-trinh-truyen-thanh-chi-tiet/{slug}','Web\AudioListController@viewdetail');

Route::get('/television-detail', function () {
    return view('pages.televisoin-detail');
});
Route::get('/search', 'Web\SearchController@search')->name('search');

Route::get('/danh-sach-van-ban','Web\DocumentListController@view');

Route::get('/chi-tiet-danh-sach-van-ban','Web\DocumentListController@viewdetail');