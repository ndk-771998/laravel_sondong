<?php

namespace App\Http\Controllers\Web;

use App\Entities\Product;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Config\Services\Facades\Option;
use VCComponent\Laravel\Product\Contracts\ViewProductListControllerInterface;
use VCComponent\Laravel\Product\Http\Controllers\Web\ProductListController as BaseProductListController;

class ProductListController extends BaseProductListController implements ViewProductListControllerInterface
{
    public function view()
    {
        return 'pages.products';
    }

    protected function viewData($products, Request $request)
    {
        Option::prepare([
            'san-pham-title',
            'san-pham-description',
            'header-logo',
            'ho-tro-truc-tuyen',
        ]);
        SEOMeta::setTitle(getOption('san-pham-title'));
        SEOMeta::setDescription(getOption('san-pham-description'));
        OpenGraph::setTitle(getOption('san-pham-title'));
        OpenGraph::setDescription(getOption('san-pham-description'));
        OpenGraph::addImage(getOption('header-logo'));
        $query           = Product::where('product_type', 'products');
        $query           = $this->applyOrderByFromRequest($query, $request);
        $products = $query->where('status', '1')->with('productMetas')->paginate(12);

        return [
        ];
    }

    public function viewPrinter()
    {
        return 'pages.products';
    }

    protected function viewDataPrinter($products, Request $request)
    {
        Option::prepare([
            'san-pham-title',
            'san-pham-description',
            'header-logo',
            'ho-tro-truc-tuyen',
        ]);
        SEOMeta::setTitle(getOption('san-pham-title'));
        SEOMeta::setDescription(getOption('san-pham-description'));
        OpenGraph::setTitle(getOption('san-pham-title'));
        OpenGraph::setDescription(getOption('san-pham-description'));
        OpenGraph::addImage(getOption('header-logo'));
        $query           = Product::where('product_type', 'printer');
        $query           = $this->applyOrderByFromRequest($query, $request);
        $products = $query->where('status', '1')->with('productMetas')->paginate(12);

        return [
            'products' => $products,
        ];
    }

    public function viewAccessory() 
    {
        return 'pages.products';
    }

    protected function viewDataAccressory($products, Request $request)
    {
        Option::prepare([
            'san-pham-title',
            'san-pham-description',
            'header-logo',
            'ho-tro-truc-tuyen',
        ]);
        SEOMeta::setTitle(getOption('san-pham-title'));
        SEOMeta::setDescription(getOption('san-pham-description'));
        OpenGraph::setTitle(getOption('san-pham-title'));
        OpenGraph::setDescription(getOption('san-pham-description'));
        OpenGraph::addImage(getOption('header-logo'));
        $query           = Product::where('product_type', 'accressory');
        $query           = $this->applyOrderByFromRequest($query, $request);
        $products = $query->where('status', '1')->with('productMetas')->paginate(12);

        return [
            'products'   => $products,
        ];
    }

    protected function applyOrderByFromRequest($query, Request $request)
    {
        if ($request->has('order_by')) {
            $orderBy = (array) json_decode($request->get('order_by'));
            if (count($orderBy) > 0) {
                foreach ($orderBy as $key => $value) {
                    $query = $query->orderBy($key, $value);
                }
            }
        } else {
            $query = $query->orderBy('id', 'desc');
        }
        return $query;
    }
}
