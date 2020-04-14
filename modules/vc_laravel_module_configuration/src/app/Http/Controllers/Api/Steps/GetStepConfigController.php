<?php

namespace VCComponent\Laravel\Config\Http\Controllers\Api\Steps;

use Illuminate\Routing\Controller as BaseController;
use VCComponent\Laravel\Config\Entities\Option;

class GetStepConfigController extends BaseController
{
    public function __invoke()
    {
        $steps   = config('step');
        $options = Option::all();

        $steps = collect($steps)->map(function ($step) {
            $has_value_inputs = collect($step['inputs'])->map(function ($input) {
                $input['value'] = Option::getOption($input['label']);
                return $input;
            })->toArray();
            $step['inputs'] = $has_value_inputs;
            return $step;
        })->toArray();

        return response()->json($steps);
    }
}
