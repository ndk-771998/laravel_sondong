<?php

namespace App\Http\Controllers\Auth;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function __invoke(Request $request)
    {
        $birth = $request['years']."-".$request['moths']."-" .$request['days']  ;

        $data             = [
            "first_name"   => $request['first_name'],
            "last_name"    => $request['last_name'],
            "gender"       => $request['gender'],
            "email"        => $request['email'],
            "phone_number" => $request['phone_number'],
            "address"      => $request['address'],
            "birth"        => $birth,
        ];
        $user = User::whereId($request['auth_id'])->update($data);

        return redirect()->back()->with('messages',('Thay đổi thông tin cá nhân thành công !'));
    }
}
