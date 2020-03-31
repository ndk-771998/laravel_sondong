<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'admin'], function ($api) {

        $api->get('scripts/list', 'VCComponent\Laravel\Script\Http\Controllers\Api\Admin\ScriptController@list');
        $api->put('scripts/status/bulk', 'VCComponent\Laravel\Script\Http\Controllers\Api\Admin\ScriptController@bulkUpdateStatus');
        $api->put('scripts/{id}/status', 'VCComponent\Laravel\Script\Http\Controllers\Api\Admin\ScriptController@updateStatus');
        $api->resource('scripts', 'VCComponent\Laravel\Script\Http\Controllers\Api\Admin\ScriptController');
    });
});
