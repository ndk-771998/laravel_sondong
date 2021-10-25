<?php

namespace App\Http\Controllers\Web;

use App\Entities\Product;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Product\Contracts\ViewProductDetailControllerInterface;
use VCComponent\Laravel\Product\Http\Controllers\Web\ProductDetailController as BaseProductDetailController;

class ProductDetailController extends BaseProductDetailController implements ViewProductDetailControllerInterface
{
    use PrepareOption;

    public function view()
    {
        return 'pages.detail-product';
    }

    public function viewData($product, Request $request)
    {
        $this->prepareOption();

        SEOMeta::setTitle($product->name);
        SEOMeta::setDescription(getOption('desc-seo-product'));
        OpenGraph::setTitle($product->name);
        OpenGraph::setDescription(getOption('desc-seo-product'));
        OpenGraph::addImage($product->thumbnail);

        $relatedProducts = Product::where('product_type', $product->product_type)->where('id', '<>', $product->id)->with('productMetas')
            ->latest()
            ->limit(5)
            ->get();
        $accressories          = Product::where('product_type', 'products')->whereHas('categories', function($query) {
            $query->where('slug', 'phu-kien');
        })->orderBy('id', 'desc')->where('id', '<>', $product->id)->where('status', '1')->with('productMetas')
        ->latest()
        ->limit(5)
        ->get();
        return [
            'relatedProducts' => $relatedProducts,
            'accressories'    => $accressories,
        ];
    }
}
