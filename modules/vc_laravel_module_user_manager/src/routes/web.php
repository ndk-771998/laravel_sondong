<?php

Route::group(['prefix' => '/'], function () {
    Route::middleware('web')->group(function () {

        Route::get('verify/{id}', 'VCComponent\Laravel\User\Http\Controllers\Web\ResendVerifyController@view');
        Route::get('verify-not-me/{id}', 'VCComponent\Laravel\User\Http\Controllers\Web\ResendVerifyController@notMe')->name('verify-not-me');

        Route::post('forgot-password', 'VCComponent\Laravel\User\Http\Controllers\Web\ForgotPasswordController@sendResetLinkEmail')->name('password.forgot');

        Route::get('reset-password', 'VCComponent\Laravel\User\Http\Controllers\Web\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('reset-password', 'VCComponent\Laravel\User\Http\Controllers\Web\ResetPasswordController@reset')->name('password.reset.post');

        Route::get('account', 'VCComponent\Laravel\User\Http\Controllers\Web\InformationController@index')->middleware('auth');

        Route::get('login', 'VCComponent\Laravel\User\Http\Controllers\Web\LoginController@showLoginForm')->name('login');

        Route::post('login', 'VCComponent\Laravel\User\Http\Controllers\Web\LoginController@login')->name('login');
        Route::get('logout', 'VCComponent\Laravel\User\Http\Controllers\Web\LoginController@logout')->name('logout');

        Route::get('/register', function () {
            return view('auth.registration');
        });

        Route::get('/forgot-password', function () {
            return view('auth.forgot-password');
        });

        Route::post('register', 'VCComponent\Laravel\User\Http\Controllers\Web\RegisterController@register')->name('register');
        Route::post('info-edit', 'VCComponent\Laravel\User\Http\Controllers\Web\InformationController@editInfo')->name('info.edit');

    });

});
