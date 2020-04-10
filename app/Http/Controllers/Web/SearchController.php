<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\Product;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {

        $products         = Product::query();
        $products         = $this->applySearchFromRequest($products, ['name'], $request);
        $products_result  = $products->OrderBy('id', 'desc')->paginate(6);
        $products_tabpane = $products->OrderBy('id', 'desc')->paginate(12);

        $news         = Post::query();
        $news         = $this->applySearchFromRequest($news, ['title'], $request);
        $news_result  = $news->ofType('posts')->OrderBy('id', 'desc')->paginate(6);
        $news_tabpane = $news->ofType('posts')->OrderBy('id', 'desc')->paginate(5);

        return view('pages.search', [
            'products'         => $products_result,
            'products_tabpane' => $products_tabpane,
            'news'             => $news_result,
            'news_tabpane'     => $news_tabpane,
            'result'           => $request->all(),
        ]);
    }

    protected function applySearchFromRequest($query, array $fields, Request $request) {
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
}
