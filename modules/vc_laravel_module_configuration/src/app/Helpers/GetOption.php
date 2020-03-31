<?php


use VCComponent\Laravel\Config\Entities\Option;

if (!function_exists('getOption')) {
    function getOption($key)
    {
        return Option::getOption($key);
    }
}

if (!function_exists('saveOption')) {
    function saveOption($request)
    {
        $option = Option::create($request->all());
        return response()->json([
            'data' => $option,
        ]);
    }
}

if (!function_exists('getOptions')) {
    function getOptions($key)
    {
        return Option::getOptions($key);
    }
}
