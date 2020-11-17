<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use VCComponent\Laravel\Contact\Repositories\ContactRepository;

class ContactController extends Controller
{
    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
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
        $contact = $this->repository->create($request->all());
        return redirect()->back()->with('messages', __('Tin nhắn của bạn đã được gửi ! Xin cảm ơn ý kiến đóng góp của bạn, bạn đã góp phần giúp đội ngũ chúng tôi phát triển hơn!'));
    }
}
