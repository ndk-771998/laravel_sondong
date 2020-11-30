<?php

namespace App\Http\Controllers\Web;

use App\Entities\Product;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Config\Services\Facades\Option;
use VCComponent\Laravel\Product\Contracts\ViewProductDetailControllerInterface;
use VCComponent\Laravel\Product\Http\Controllers\Web\ProductDetailController as BaseProductDetailController;

class ProductDetailController extends BaseProductDetailController implements ViewProductDetailControllerInterface
{
    public function view()
    {
        return 'pages.detail-product';
    }

    public function viewData($product, Request $request)
    {
        Option::prepare([
            'ho-tro-truc-tuyen'
        ]);
        SEOMeta::setTitle($product->name);
        SEOMeta::setDescription($product->description);
        OpenGraph::setTitle($product->name);
        OpenGraph::setDescription($product->description);
        OpenGraph::addImage($product->thumbnail);
        $comments        = $product->getLatestComment(10)->where('status', 1);
        $relatedProducts = Product::where('id', '<>', $product->id)->with('productMetas')
            ->latest()
            ->limit(3)
            ->get();
        return [
            'comments'        => $comments,
            'relatedProducts' => $relatedProducts,
        ];
    }
}
