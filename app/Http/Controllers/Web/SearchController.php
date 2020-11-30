<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {

        SEOMeta::setTitle('Kết quả tìm kiếm ' . $request->search);
        SEOMeta::setDescription(getOption('trang-chu-description'));
        OpenGraph::setTitle('Kết quả tìm kiếm ' . $request->search);
        OpenGraph::setDescription(getOption('trang-chu-description'));

        $products         = Product::query();
        $products         = $this->applySearchFromRequest($products, ['name'], $request);
        $products_result  = $products->where('status', '1')->OrderBy('id', 'desc')->with('productMetas')->simplePaginate(20);
        $products_tabpane = $products->where('status', '1')->OrderBy('id', 'desc')->with('productMetas')->paginate(12);
        $products_tabpane->setPath('/search?search=' . $request['search']);

        $news         = Post::query();
        $news         = $this->applySearchFromRequest($news, ['title'], $request);
        $news_result  = $news->ofType('posts')->OrderBy('id', 'desc')->where('status', '1')->limit(5)->get();
        $news_tabpane = $news->ofType('posts')->OrderBy('id', 'desc')->where('status', '1')->paginate(12);

        return view('pages.search', [
            'products'         => $products_result,
            'products_tabpane' => $products_tabpane,
            'news'             => $news_result,
            'news_tabpane'     => $news_tabpane,
            'result'           => $request->all(),
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
}
