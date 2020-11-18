<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Validators\ContactValidator;
use Illuminate\Http\Request;
use VCComponent\Laravel\Contact\Repositories\ContactRepository;

class ContactController extends Controller
{

    public function __construct(ContactRepository $repository, ContactValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $this->validator->isvalid($request);
        $contact = $this->repository->create($request->all());
        return redirect()->back()->with('messages', __('Tin nhắn của bạn đã được gửi ! Xin cảm ơn ý kiến đóng góp của bạn, bạn đã góp phần giúp đội ngũ chúng tôi phát triển hơn!'));
    }
}
