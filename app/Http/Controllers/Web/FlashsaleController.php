<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class FlashsaleController extends Controller
{
    use PrepareOption;

    public function __invoke()
    {
        $this->prepareOption();

        SEOMeta::setTitle(getOption('title-seo-flash-sale'));
        SEOMeta::setDescription(getOption('desc-seo-flash-sale'));
        OpenGraph::setTitle(getOption('title-seo-flash-sale'));
        OpenGraph::setDescription(getOption('desc-seo-flash-sale'));
        OpenGraph::addImage(getOption('header-logo'));

        $flash_sales          = Product::where('product_type', 'products')->whereHas('categories', function($query) {
            $query->where('slug', 'flash-sale');
        })->orderBy('is_hot', 'desc')->orderBy('id', 'desc')->where('status', '1')->with('productMetas')->limit(10)->paginate(15);

        return view('pages.flash-sale', [
            'flash_sales' => $flash_sales, 
        ]);
    }
}
