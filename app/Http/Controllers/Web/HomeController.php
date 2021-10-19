<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    use PrepareOption;

    public function __invoke()
    {
        $this->prepareOption();

        SEOMeta::setTitle(getOption('title-seo-home'));
        SEOMeta::setDescription(getOption('desc-seo-home'));
        OpenGraph::setTitle(getOption('title-seo-home'));
        OpenGraph::setDescription(getOption('desc-seo-home'));
        OpenGraph::addImage(getOption('header-logo'));

        $flash_sales          = Product::where('product_type', 'products')->whereHas('categories', function($query) {
            $query->where('slug', 'flash-sale');
        })->orderBy('is_hot', 'desc')->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(10)->get();
        $new_products          = Product::where('product_type', 'products')->whereHas('categories', function($query) {
            $query->where('slug', 'laptop-moi');
        })->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(5)->get();
        $old_products          = Product::where('product_type', 'products')->whereHas('categories', function($query) {
            $query->where('slug', 'laptop-cu');
        })->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(5)->get();
        $printer          = Product::where('product_type', 'products')->whereHas('categories', function($query) {
            $query->where('slug', 'may-in');
        })->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(5)->get();
        $customerfeedbacks = Post::where('type', 'customerfeedback')->where('status', '1')->limit(9)->get();
        $customermedias = Post::where('type', 'customermedias')->paginate(12);

        return view('index', [
            'flash_sales'        => $flash_sales,
            'new_products'      => $new_products,
            'old_products'      => $old_products,
            'printers'          => $printer,
            'customerfeedbacks' => $customerfeedbacks,
            'customermedias'    => $customermedias
        ]);
    }
}
