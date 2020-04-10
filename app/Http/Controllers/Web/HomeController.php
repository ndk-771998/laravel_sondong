<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use VCComponent\Laravel\Post\Entities\Post;
use VCComponent\Laravel\Product\Entities\Product;

class HomeController extends Controller {
    public function __invoke() {
        $products = Product::OrderBy('id', 'desc')->paginate(9);

        $news         = Post::oftype('posts')->OrderBy('id', 'desc')->paginate(3);

        $place        = Post::oftype('place')->OrderBy('id', 'desc');
        $place_result = $place->limit(3)->get();
        $place_count  = $place->count();

        $exhibition        = Post::oftype('exhibition')->OrderBy('id', 'desc');
        $exhibition_result = $exhibition->limit(3)->get();
        $exhibition_count  = $exhibition->count();

        return view('index', [
            'products'   => $products,
            'news'       => $news,
            'place'      => $place_result,
            'exhibition' => $exhibition_result,
            'place_count'      => $place_count,
            'exhibition_count' => $exhibition_count,
        ]);
    }
}
