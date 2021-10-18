<?php

namespace App\Http\Controllers\Web;

use App\Entities\Category;
use App\Entities\Post;
use App\Entities\Product;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Category\Http\Controllers\Web\CategoryDetailController as WebCategoryDetailController;

class CategoryDetailController extends WebCategoryDetailController
{
    use PrepareOption;
    
    protected function view()
    {
        return 'pages.category-detail';
    }

    protected function viewData($category, Request $request)
    {
        $this->prepareOption();

        SEOMeta::setTitle($category->name);
        SEOMeta::setDescription($category->description);
        OpenGraph::setTitle($category->ame);
        OpenGraph::setDescription($category->description);
        OpenGraph::addImage($category->thumbnail);

        $children_categories = $category->children()->where('status', '1')->get();

        $manufacturers_parent_id = Category::ofType('products')->where('slug', 'hang-san-xuat')->first();
        if ($manufacturers_parent_id) {
            $manufacturers = Category::ofType('products')->where('parent_id', $manufacturers_parent_id->id)->where('status', 1)->get();
        } else {
            $manufacturers = [];
        }

        $products = Product::ofCategory($category->id);
        $products = $this->applyPriceRangeFromRequest($products, $request);
        $products = $products->where('status', '1')->orderBy('order', 'asc')->latest()->paginate(12);

        return [
            'products' => $products,
            'children_categories' => $children_categories,
            'manufacturers' => $manufacturers,
        ];
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
}
