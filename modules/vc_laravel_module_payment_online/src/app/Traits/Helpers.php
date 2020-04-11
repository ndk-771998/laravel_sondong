<?php

namespace VCComponent\Laravel\Payment\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait Helpers
{
    private function config ()
    {
        if (config('payment.vnp_Url') !== '') {
            $vnp_Url = config('payment.vnp_Url');
        } else {
            $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        }

        if (config('payment.vnp_Returnurl') !== '') {
            $vnp_Returnurl = config('payment.vnp_Returnurl');
        } else {
            $vnp_Returnurl = '';
        }

        if (config('payment.vnp_HashSecret') !== '') {
            $vnp_HashSecret = config('payment.vnp_HashSecret');
        } else {
            $vnp_HashSecret = "TOAFFBVZDAEQOEDSOFDSWNJYOUUWPCJW";
        }

        if (config('payment.vnp_TmnCode') !== '') {
            $vnp_TmnCode = config('payment.vnp_TmnCode');
        } else {
            $vnp_TmnCode = "IN1FL50W";
        }
        return [
            'vnp_Url' => $vnp_Url,
            'vnp_Returnurl' => $vnp_Returnurl,
            'vnp_HashSecret' => $vnp_HashSecret,
            'vnp_TmnCode' =>$vnp_TmnCode,

        ];
    }
}
