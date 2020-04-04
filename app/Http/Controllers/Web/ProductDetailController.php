<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use VCComponent\Laravel\Product\Http\Controllers\Web\ProductDetailController as BaseProductDetailController;
use VCComponent\Laravel\Product\Contracts\ViewProductDetailControllerInterface;

class ProductDetailController extends BaseProductDetailController implements ViewProductDetailControllerInterface
{
    public function view()
    {
        return 'pages.detail-product';
    }
}
