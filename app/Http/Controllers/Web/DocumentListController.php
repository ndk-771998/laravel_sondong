<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;

class DocumentListController extends Controller
{
    use PrepareOption;

    public function view()
    {
        return view('pages.document-list');
    }

    public function viewdetail()
    {
        return view('pages.document-detail');
    }
}