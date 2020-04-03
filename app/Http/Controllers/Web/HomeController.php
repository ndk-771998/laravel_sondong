<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use VCComponent\Laravel\Post\Entities\Post;
use VCComponent\Laravel\Product\Entities\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $products = Product::OrderBy('id', 'desc')->paginate(9);
        $news    = Post::oftype('posts')->OrderBy('id', 'desc')->paginate(3);
        return view('index', [
            'products' => $products,
            'news'    => $news,
        ]);
    }
}
