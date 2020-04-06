<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use VCComponent\Laravel\Post\Entities\Post;
use VCComponent\Laravel\Product\Entities\Product;

class HomeController extends Controller {
    public function __invoke() {
        $products        = Product::where('brand', 'váy cưới')->OrderBy('id', 'desc')->paginate(9);

        $exhibition      = Product::where('brand', 'hỗ trợ triển lãm cưới')->OrderBy('id', 'desc')->limit(3)->get();
        $exhibitionCount = Product::where('brand', 'hỗ trợ triển lãm cưới')->count();

        $place           = Product::where('brand', 'địa điểm cưới lãng mạng')->OrderBy('id', 'desc')->limit(3)->get();
        $placeCount      = Product::where('brand', 'địa điểm cưới lãng mạng')->count();

        $news = Post::oftype('posts')->OrderBy('id', 'desc')->paginate(3);

        return view('index', [
            'products'        => $products,
            'place'           => $place,
            'exhibition'      => $exhibition,
            'exhibitionCount' => $exhibitionCount,
            'placeCount'      => $placeCount,
            'news'            => $news,
        ]);
    }
}
