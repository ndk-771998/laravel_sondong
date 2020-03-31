<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => config('contact.namespace')], function ($api) {
        $api->resource('contacts', 'VCComponent\Laravel\Contact\Http\Controllers\Api\Frontend\ContactController');

        $api->group(['prefix' => 'admin'], function ($api) {
            $api->resource('contacts', 'VCComponent\Laravel\Contact\Http\Controllers\Api\Admin\ContactController');
        });
    });
});
