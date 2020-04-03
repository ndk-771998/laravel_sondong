<?php

namespace App\Http\Controllers\Web;

use VCComponent\Laravel\Product\Http\Controllers\Web\ProductListController as BasePostListController;
use Illuminate\Http\Request;
use VCComponent\Laravel\Product\Contracts\ViewProductListControllerInterface;
use VCComponent\Laravel\Product\Entities\Product;

class ProductListController extends BasePostListController implements ViewProductListControllerInterface
{
    public function view()
    {
        return 'pages.products';
    }

    protected function viewData($products, Request $request)
    {
        $products_custom = Product::OrderBy('id','desc')->paginate(9);
        return [
            'products_custom' => $products_custom,
        ];
    }
}
