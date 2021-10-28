<?php

namespace App\Http\Controllers\Web;

use App\Entities\Category;
use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Config\Services\Facades\Option;

class SearchController extends Controller
{
    use PrepareOption;
    
    public function __invoke(Request $request)
    {

    }
}
