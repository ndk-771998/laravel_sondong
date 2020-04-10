<?php

namespace App\Http\Controllers\Auth;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller {
    public function index() {
        $user   = User::whereId(Auth::user()->id)->with('sex')->first();
        $gender = '';
        if ($user->gender !== null) {
            $gender = $user->sex->value;
        }

        $date_array = [
            0 => "",
            1 => "",
            2 => "",
        ];

        if ($user->birh !== null) {
            $date       = $user->birth->calendar();
            $date_array = explode('/', $date);
        }

        return view('pages.account', compact('gender', 'date_array'));
    }

    public function editInfo(Request $request) {
        $birth = $request['years'] . "-" . $request['moths'] . "-" . $request['days'];

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
