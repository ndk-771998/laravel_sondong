<?php

namespace App\Http\Validators;

use Illuminate\Http\Request;

class ContactValidator
{
    public function isValid(Request $request)
    {
        $validatedData = $request->validate(
            [
                'last_name'    => 'required',
                'address'      => 'required',
                'phone_number' => 'required|string|regex:/^\d*$/',
                'email'        => 'required|email',
            ],
            [
                'last_name.required'         => "Họ tên không được để trống",
                'address.required'           => "Địa chỉ không được để trống",
                'phone_number.required'      => "Số điện thoại không được để trống",
                'phone_number.regex:/^\d*$/' => "Số điện thoại không hợp lệ",
                'email.required'             => "Email không được để trống",
                'email.email'                => "Email không hợp lệ",
            ]
        );
    }

}
