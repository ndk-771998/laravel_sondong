<?php

namespace VCComponent\Laravel\User\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use VCComponent\Laravel\User\Entities\User;
use VCComponent\Laravel\User\Repositories\UserRepository;

class ResendVerifyController extends Controller
{

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;

    }
    public function view(Request $request)
    {

        $user = User::find($request->id);

        if (!$user) {
            return view('auth.errow-verify');
        }


        if (!Auth::check()) {
            Auth::login($user, true);
        }

        if ($user->email_verified === 0) {
            if ($user->verify_token === $request->get('token')) {
                $user = $this->repository->verifyEmail($user);
            } else {
                return view('auth.errow-verify');
            }
        } else {
            return view('auth.errow-verify');
        }




        return view('auth.verify');
    }

    public function notMe(Request $request)
    {
        $user = $this->repository->find($request->id);

        if (!$user) {
            return view('auth.errow-verify');
        }
        if ($user->email_verified === 0) {

            if ($user->verify_token === $request->get('token')) {

                $user->status            = 2;
                $user->email_verified_at = Carbon::now();
                $user->email_verified    = 2;

                $user->save();
            } else {
                return view('auth.errow-verify');
            }
        } else {
            return view('auth.errow-verify');
        }

        return view('auth.errow-verify');

    }
}
