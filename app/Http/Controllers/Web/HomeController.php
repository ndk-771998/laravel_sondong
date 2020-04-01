<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use VCComponent\Laravel\Product\Entities\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $products = Product::OrderBy('id','desc')->paginate(9);
        return view('index', [
            'products' => $products
        ]);
    }
}
