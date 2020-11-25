<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post as EntitiesPost;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    public function __invoke()
    {
        SEOMeta::setTitle(getOption('trang-chu-title'));
        SEOMeta::setDescription(getOption('trang-chu-description'));
        OpenGraph::setTitle(getOption('trang-chu-title'));
        OpenGraph::setDescription(getOption('trang-chu-description'));
        OpenGraph::addImage(getOption('header-logo'));
        $products          = Product::orderBy('id', 'desc')->where('status', '1')->paginate(9);
        $news              = EntitiesPost::getBy('posts', 1)->limit(3)->get();
        $place_result      = EntitiesPost::getBy('place', 1)->limit(3)->get();
        $exhibition_result = EntitiesPost::getBy('exhibition', 1)->limit(3)->get();
        $place_count       = EntitiesPost::getBy('place', 1)->get()->count();
        $exhibition_count  = EntitiesPost::getBy('exhibition', 1)->get()->count();

        return view('index', [
            'products'         => $products,
            'news'             => $news,
            'place'            => $place_result,
            'exhibition'       => $exhibition_result,
            'place_count'      => $place_count,
            'exhibition_count' => $exhibition_count,
        ]);
    }
}
