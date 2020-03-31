<?php

Route::middleware('web')->group(function () {
    Route::get('/payment','VCComponent\Laravel\Payment\Http\Controllers\Web\PaymentController');
});
