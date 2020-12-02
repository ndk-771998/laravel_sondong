<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Validators\ContactValidator;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Contact\Repositories\ContactRepository;
use VCComponent\Laravel\Config\Services\Facades\Option;
class ContactController extends Controller
{

    public function __construct(ContactRepository $repository, ContactValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function index()
    {
        Option::prepare([
            'lien-he-title',
            'lien-he-description',
            'header-logo',
            'ho-tro-truc-tuyen',
        ]);
        SEOMeta::setTitle(getOption('lien-he-title'));
        SEOMeta::setDescription(getOption('lien-he-description'));
        OpenGraph::setTitle(getOption('lien-he-title'));
        OpenGraph::setDescription(getOption('lien-he-description'));
        OpenGraph::addImage(getOption('header-logo'));
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $this->validator->isvalid($request);
        $contact = $this->repository->create($request->all());
        return redirect()->back()->with('messages', __('Tin nhắn của bạn đã được gửi ! Xin cảm ơn ý kiến đóng góp của bạn, bạn đã góp phần giúp đội ngũ chúng tôi phát triển hơn!'));
    }
}
