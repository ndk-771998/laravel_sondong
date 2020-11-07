<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Validator;
use VCComponent\Laravel\User\Http\Controllers\Web\RegisterController as WebUserController;

class UserController extends WebUserController
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'first_name'    => ['required', 'string'],
            'last_name'     => ['required', 'string'],
            'username'      => ['required', 'string',"unique:users"],
            'email'         => ['required','email','confirmed','unique:users'],
            'address'       => ['required'],
            'phone_number'  => ['required', 'string', 'regex:/^\d*$/'],
            'password'      => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        return $validator;
    }
}
