<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;

class AudioListController extends Controller
{
    use PrepareOption;

    public function view()
    {
        return view('pages.audio-list');
    }

    public function viewdetail()
    {
        return view('pages.audio-detail');
    }
}
