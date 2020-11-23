<?php

namespace App\Http\Controllers\Web;

use App\Entities\Product;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
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

        SEOMeta::setTitle(getOption('lien-he-title'));
        SEOMeta::setDescription(getOption('lien-he-description'));
        OpenGraph::setTitle(getOption('lien-he-title'));
        OpenGraph::setDescription(getOption('lien-he-description'));
        OpenGraph::addImage($product->thumbnail);
        $comments        = $product->getLatestComment(10)->where('status', 1);
        $relatedProducts = Product::where('id', '<>', $product->id)
            ->latest()
            ->limit(3)
            ->get();
        $thumbnailProducts = $product->productMetas()->get();

        return [
            'comments'          => $comments,
            'relatedProducts'   => $relatedProducts,
            'thumbnailProducts' => $thumbnailProducts,
        ];
    }
}
