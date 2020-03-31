<?php

Route::group(['prefix' => '/'], function () {
    Route::middleware('web')->group(function () {

        Route::get('verify/{id}', 'VCComponent\Laravel\User\Http\Controllers\Web\ResendVerifyController@view');
        Route::get('verify-not-me/{id}', 'VCComponent\Laravel\User\Http\Controllers\Web\ResendVerifyController@notMe')->name('verify-not-me');

    });

});

// Route::get('verify-login', 'VCComponent\Laravel\User\Http\Controllers\Web\verifyLoginController@view')->name('verify-login');
