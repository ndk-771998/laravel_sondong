<?php

namespace App\Http\Controllers\Web;

use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Order\Contracts\ViewCartControllerInterface;
use VCComponent\Laravel\Order\Http\Controllers\Web\Cart\CartController as BaseController;
use VCComponent\Laravel\Config\Services\Facades\Option;
class CartController extends BaseController implements ViewCartControllerInterface
{
    public function viewCart()
    {
        return 'pages.cart';
    }
    protected function viewData($carts, Request $request)
    {
        Option::prepare([
            'gio-hang-title',
            'gio-hang-description',
            'header-logo',
        ]);
        SEOMeta::setTitle(getOption('gio-hang-title'));
        SEOMeta::setDescription(getOption('gio-hang-description'));
        OpenGraph::setTitle(getOption('gio-hang-title'));
        OpenGraph::setDescription(getOption('gio-hang-description'));
        OpenGraph::addImage(getOption('header-logo'));
        return [];
    }
}
