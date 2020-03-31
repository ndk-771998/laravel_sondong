<?php

namespace VCComponent\Laravel\User\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use VCComponent\Laravel\User\Entities\User;
use Illuminate\Support\Str;

class verifyLoginController  extends Controller
{

    //login resendVerify
    public function view(Request $request)
    {

        $user = User::find($request->id);
        dd($user);

        Auth::login($user);


        return view('pages.account');
    }
}
