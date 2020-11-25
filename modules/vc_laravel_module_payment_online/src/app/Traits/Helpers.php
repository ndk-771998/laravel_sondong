<?php

namespace VCComponent\Laravel\Payment\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait Helpers
{
    private function config()
    {
        return [
            'vnp_Url'        => config('payment.vnp_Url'),
            'vnp_Returnurl'  => config('payment.vnp_Returnurl'),
            'vnp_HashSecret' => config('payment.vnp_HashSecret'),
            'vnp_TmnCode'    => config('payment.vnp_TmnCode'),

        ];
    }
}
