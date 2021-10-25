<?php

namespace App\Http\Controllers\Web;

use App\Entities\Category;
use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Config\Services\Facades\Option;

class SearchController extends Controller
{
    use PrepareOption;
    
    public function __invoke(Request $request)
    {
        $this->prepareOption();

        SEOMeta::setTitle('Kết quả tìm kiếm "' . $request->search . '"');
        SEOMeta::setDescription(getOption('trang-chu-description'));
        OpenGraph::setTitle('Kết quả tìm kiếm "' . $request->search . '"');
        OpenGraph::setDescription(getOption('trang-chu-description'));
        OpenGraph::addImage(getOption('header-logo'));
        $products         = Product::query();
        $products         = $this->applySearchFromRequest($products, ['name'], $request);
        $products_result  = $products->where('status', '1')->OrderBy('id', 'desc')->with('productMetas')->paginate(12);


        return view('pages.search', [
            'products'         => $products_result,
        ]);
    }

    public function ajaxfilter(Request $request)
    {
        $products         = Product::query();
        if ($request->has('product_type')) {
            $products = $products->where('product_type', $request->get('product_type'));
        }
        if ($request->has('product_category')) {
            $products = $products->whereHas('categories', function ($query) use ($request) {
                $query->where('slug', $request->get('product_category'));
            });
        }
        $products         = $this->applySearchFromRequest($products, ['name'], $request);

        $products = $this->applyPriceRangeFromRequest($products, $request);
        $products = $this->applyManufacturerFromRequest($products, $request);

        if($request->get('order_by') == "price_desc") {
            $products = $products->orderBy('price', 'desc');
        } elseif ($request->get('order_by') == "price_asc") {
            $products = $products->orderBy('price', 'asc');
        } else {
            $products = $products->OrderBy('id', 'desc');
        }

        $products_result  = $products->with('productMetas')->paginate(12);

        return view('include.ajax-filter-result', [
            'products'         => $products_result,
        ]);
    }

    public function ajaxsearch(Request $request) {
        
        $products         = Product::query();
        $products         = $this->applySearchFromRequest($products, ['name'], $request);
        $products_result  = $products->with('productMetas')->limit(12)->get();

        return view('include.ajax-type-hint-result', [
            'products'         => $products_result,
        ]);
    }

    protected function applySearchFromRequest($query, array $fields, Request $request)
    {
        if ($request->has('search')) {
            $search = $request->get('search');
            if (count($fields)) {
                $query = $query->where(function ($q) use ($fields, $search) {
                    foreach ($fields as $key => $field) {
                        $q = $q->orWhere($field, 'like', "%{$search}%");
                    }
                });
            }
        }
        return $query;
    }
    
    protected function applyPriceRangeFromRequest($query, Request $request) 
    {
        if ($request->get("price") !== null && $request->get('price') !== '') {
            $prices = explode("&", $request->get("price"));
            $price_range = [];
            collect($prices)->map(function($price) use (&$price_range) {
                array_push($price_range, explode("-", str_replace('price=', '', $price)));
            });

            return $query->where(function ($query) use ($price_range) {
                foreach ($price_range as $item) {
                    if (array_key_exists("1", $item)) {
                        $query = $query->orWhere(function($query) use ($item) {
                            $query->where('price', '>=', $item[0])->where('price', '<=', $item[1]);
                        });
                    } else {
                        $query = $query->orWhere(function($query) use ($item) {
                            $query->where('price', '>=', $item[0]);
                        });
                    }
                }
            });
        }
        return $query;
    }

    protected function applyManufacturerFromRequest($query, Request $request) 
    {
        if($request->has('manufacturer') && $request->get("manufacturer")) {
            $manufacturers = explode("&", $request->get("manufacturer"));
            $manufacturers = collect($manufacturers)->map(function($manufacturer) use (&$query) {
                return str_replace('manufacturer=', '', $manufacturer);
            })->toArray();

            $query = $query->whereHas('categories', function ($query) use ($manufacturers) {
                $query->whereIn('slug', $manufacturers);
            });

            // $products = Category::whereIn('slug', $manufacturers)->with('products')->get();
            // dd($products->pluck('products')->toArray());
            // if (count($products)) {
            //     $query = $query->whereIn('id', $products->pluck('id')->toArray());
            // }
        }
        return $query;
    }
}
