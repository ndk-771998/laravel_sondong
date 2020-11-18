<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post as EntitiesPost;
use App\Http\Controllers\Controller;
use VCComponent\Laravel\Product\Entities\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        // dd(url()->previous());
        // $news = Post::oftype('posts')->OrderBy('id', 'desc')->where('status', '1')->paginate(3);
        // $place        = Post::oftype('place')->OrderBy('id', 'desc')->where('status', '1');
        // $place_result = $place->limit(3)->get();
        // $place_count  = $place->count();
        // $exhibition        = Post::oftype('exhibition')->OrderBy('id', 'desc')->where('status', '1');
        // $exhibition_result = $exhibition->limit(3)->get();
        // $exhibition_count  = $exhibition->count();

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
