<?php

namespace App\Http\Controllers\Web;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use VCComponent\Laravel\User\Entities\User;
use VCComponent\Laravel\User\Http\Controllers\Web\RegisterController as WebUserController;

class UserController extends WebUserController
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if ($data['email'] !== null) {
            $validator = Validator::make($data, [
                'email' => 'email|max:255|unique:email',
            ]);
        }
        if ($data['username'] !== null) {
            $validator = Validator::make($data, [
                'username' => ['unique:users'],
            ]);
        }
        $validator = Validator::make($data, [
            'first_name'    => ['required', 'string'],
            'last_name'     => ['required', 'string'],
            'username'      => ['required', 'string',"unique:users"],
            'email'         => ['required','confirmed','unique:users'],
            'address'       => ['required'],
            'phone_number'  => ['required', 'string', 'regex:/^\d*$/'],
            'password'      => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
        return User::create([
            'username'     => $data['username'],
            'first_name'   => $data['first_name'],
            'last_name'    => $data['last_name'],
            'email'        => $data['email'],
            'phone_number' => $data['phone_number'],
            'address'      => $data['address'],
            'password'     => $data['password'],
            'verify_token' => str::random(32),
        ]);
    }
}
