<?php

namespace VCComponent\Laravel\User\Http\Controllers\Web;

use VCComponent\Laravel\User\Entities\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class InformationController extends Controller {
    public function index() {
        $user   = User::whereId(Auth::user()->id)->with('sex')->first();
        $gender = '';

        if ($user->gender !== null) {
            $gender = $user->sex->value;
        }

        $date = [
            0 => "", 1 => "", 2 => "",
        ];

        if ($user->birth !== null) {
            $birthday       = $user->birth;
            $date = explode('-', $birthday);
        }

        return view('auth.account', compact('gender', 'date'));
    }

    public function editInfo(Request $request) {
        $birth = null;
        if ($request['years'] !== null && $request['moths'] !== null && $request['days'] !== null) {
            $birth = $request['years'] . "-" . $request['moths'] . "-" . $request['days'];
        }
        $data = [
            "first_name"   => $request['first_name'],
            "last_name"    => $request['last_name'],
            "gender"       => $request['gender'],
            "email"        => $request['email'],
            "phone_number" => $request['phone_number'],
            "address"      => $request['address'],
            "birth"        => $birth,
        ];
        $user = User::whereId($request['auth_id'])->update($data);

        return redirect()->back()->with('messages', ('Thay đổi thông tin cá nhân thành công !'));
    }
}
