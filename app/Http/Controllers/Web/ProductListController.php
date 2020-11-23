<?php

namespace App\Http\Controllers\Web;

use App\Entities\Product;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Product\Contracts\ViewProductListControllerInterface;
use VCComponent\Laravel\Product\Http\Controllers\Web\ProductListController as BaseProductListController;

class ProductListController extends BaseProductListController implements ViewProductListControllerInterface
{
    protected $activeFilter = 'id|desc';

    public function view()
    {
        return 'pages.products';
    }

    protected function viewData($products, Request $request)
    {
        SEOMeta::setTitle(getOption('san-pham-title'));
        SEOMeta::setDescription(getOption('san-pham-description'));
        OpenGraph::setTitle(getOption('san-pham-title'));
        OpenGraph::setDescription(getOption('san-pham-description'));
        OpenGraph::addImage(getOption('header-logo'));
        $query           = Product::query();
        $query           = $this->applyOrderByFromRequest($query, $request);
        $products_custom = $query->where('status', '1')->paginate(9);

        $activeFilter = $this->activeFilter;

        if ($request->has('order_by')) {
            $orderBy = (array) json_decode($request->get('order_by'));
            $orderBy = collect($orderBy)->map(function ($value, $key) {
                return $key . '|' . $value;
            })->toArray();

            $activeFilter = implode($orderBy);
        }
        return [
            'products_custom' => $products_custom,
            'activeFilter'    => $activeFilter,
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
