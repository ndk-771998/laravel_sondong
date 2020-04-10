<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use VCComponent\Laravel\Order\Contracts\ViewCartControllerInterface;
use VCComponent\Laravel\Order\Http\Controllers\Web\Cart\CartController as BaseController;

class CartController extends BaseController implements ViewCartControllerInterface {
    public function viewCart() {
        return 'pages.cart';
    }
}
