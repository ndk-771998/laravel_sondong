<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use VCComponent\Laravel\Config\Services\Facades\Option;

class HomeController extends Controller
{
    public function __invoke()
    {
        Option::prepare([
            'trang-chu-title',
            'trang-chu-description',
            'header-logo',
            'ho-tro-truc-tuyen',
            'trang-chu-slide-1',
            'trang-chu-slide-2',
            'trang-chu-slide-3',
            'trang-chu-slide-4',
            'trang-chu-slide-5',
        ]);
        SEOMeta::setTitle(getOption('trang-chu-title'));
        SEOMeta::setDescription(getOption('trang-chu-description'));
        OpenGraph::setTitle(getOption('trang-chu-title'));
        OpenGraph::setDescription(getOption('trang-chu-description'));
        OpenGraph::addImage(getOption('header-logo'));

        $flash_sale          = Product::where('product_type', 'products')->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(10)->get();
        $new_products          = Product::where('product_type', 'products')->whereHas('categories', function($query) {
            $query->where('slug', 'laptop-moi');
        })->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(5)->get();
        $old_products          = Product::where('product_type', 'products')->whereHas('categories', function($query) {
            $query->where('slug', 'laptop-cu');
        })->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(5)->get();
        $printer          = Product::where('product_type', 'printer')->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(5)->get();
        $customerfeedbacks = Post::where('type', 'customerfeedback')->where('status', '1')->limit(3)->get();

        return view('index', [
            'flash_sale'         => $flash_sale,
            'new_products'             => $new_products,
            'old_products'            => $old_products,
            'printers'       => $printer,
            'customerfeedbacks' => $customerfeedbacks,
        ]);
    }
}
