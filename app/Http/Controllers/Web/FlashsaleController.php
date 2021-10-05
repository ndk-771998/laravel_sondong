<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class FlashsaleController extends Controller
{
    public function __invoke()
    {
        SEOMeta::setTitle(getOption('title-seo-flash-sale'));
        SEOMeta::setDescription(getOption('desc-seo-flash-sale'));
        OpenGraph::setTitle(getOption('title-seo-flash-sale'));
        OpenGraph::setDescription(getOption('desc-seo-flash-sale'));
        OpenGraph::addImage(getOption('header-logo'));

        return view('pages.flash-sale', [

        ]);
    }
}
