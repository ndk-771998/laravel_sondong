<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    public function __invoke()
    {
        SEOMeta::setTitle(getOption('title-seo-home'));
        SEOMeta::setDescription(getOption('desc-seo-home'));
        OpenGraph::setTitle(getOption('title-seo-home'));
        OpenGraph::setDescription(getOption('desc-seo-home'));
        OpenGraph::addImage(getOption('header-logo'));

        $flash_sale          = Product::where('product_type', 'products')->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(10)->get();
        $new_products          = Product::where('product_type', 'products')->whereHas('categories', function($query) {
            $query->where('slug', 'laptop-moi');
        })->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(5)->get();
        $old_products          = Product::where('product_type', 'products')->whereHas('categories', function($query) {
            $query->where('slug', 'laptop-cu');
        })->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(5)->get();
        $printer          = Product::where('product_type', 'printer')->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(5)->get();
        $customerfeedbacks = Post::where('type', 'customerfeedback')->where('status', '1')->limit(9)->get();
        $customermedias = Post::where('type', 'customermedias')->paginate(12);

        return view('index', [
            'flash_sale'         => $flash_sale,
            'new_products'             => $new_products,
            'old_products'            => $old_products,
            'printers'       => $printer,
            'customerfeedbacks' => $customerfeedbacks,
            'customermedias'    => $customermedias
        ]);
    }
}
