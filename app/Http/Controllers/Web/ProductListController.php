<?php

namespace App\Http\Controllers\Web;

use App\Entities\Category;
use App\Entities\Product;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Config\Services\Facades\Option;
use VCComponent\Laravel\Product\Contracts\ViewProductListControllerInterface;
use VCComponent\Laravel\Product\Http\Controllers\Web\ProductListController as BaseProductListController;
use VCComponent\Laravel\Product\Traits\Helpers;

class ProductListController extends BaseProductListController implements ViewProductListControllerInterface
{
    use Helpers, PrepareOption;
    
    protected function beforeQuery(Request $request) {
        $request->merge([
            'per_page' => 12,
        ]);
    }

    public function view()
    {
        return 'pages.products';
    }

    protected function viewData($products, Request $request)
    {
        $this->prepareOption();

        SEOMeta::setTitle(getOption('title-seo-product'));
        SEOMeta::setDescription(getOption('desc-seo-product'));
        OpenGraph::setTitle(getOption('title-seo-product'));
        OpenGraph::setDescription(getOption('desc-seo-product'));
        OpenGraph::addImage(getOption('header-logo'));

        $query           = Product::where('product_type', 'products');
        $query           = $this->applyOrderByFromRequest($query, $request);
        $products = $query->where('status', '1')->with('productMetas')->paginate(12);
        $manufacturers = Category::ofType('manufacturer')->where('status', '1')->get();

        return [
            'products' => $products,
            'product_type' => $this->getTypeProduct($request),
            'manufacturers' => $manufacturers
        ];
    }

    public function viewPrinter()
    {
        return 'pages.products';
    }

    public function viewAccessory() 
    {
        return 'pages.products';
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
