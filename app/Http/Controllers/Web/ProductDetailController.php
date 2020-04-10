<?php

namespace App\Http\Controllers\Web;

use App\Entities\Product;
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
        $comments = $product->getLatestComment(10);

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
