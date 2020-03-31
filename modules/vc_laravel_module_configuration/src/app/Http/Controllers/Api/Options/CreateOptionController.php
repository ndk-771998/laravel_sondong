<?php

namespace VCComponent\Laravel\Config\Http\Controllers\Api\Options;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use VCComponent\Laravel\Config\Entities\Option;

class CreateOptionController extends BaseController
{
    public function __invoke(Request $request)
    {
        $option = Option::create($request->all());

        return response()->json([
            'data' => $option,
        ]);
    }
}
