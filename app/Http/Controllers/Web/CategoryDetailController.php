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

        $children_categories = $category->children()->get();
        $arr = Product::ofCategory($category->id)->where('status', '1')->orderBy('order', 'asc')->latest()->paginate(12);
    
        return [
            'products' => $arr,
            'children_categories' => $children_categories,
        ];
    }
}
