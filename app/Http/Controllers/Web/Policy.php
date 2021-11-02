<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;

class HomeController extends Controller
{
    use PrepareOption;

    public function __invoke()
    {
        return view('list_new');
    }
}