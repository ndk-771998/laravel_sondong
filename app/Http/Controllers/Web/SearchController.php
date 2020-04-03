<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use VCComponent\Laravel\Product\Entities\Product;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $query    = Product::query();

        $query    = $this->applySearchFromRequest($query, ['name'], $request);
        $products = $query->OrderBy('id', 'desc')->paginate(6);

        return view('pages.search', [
            'products' => $products,
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
