<?php

namespace App\Pipes;

use Closure;
use Illuminate\Http\Request;
use VCComponent\Laravel\Product\Contracts\Pipe;

class ApplyPriceRange implements Pipe
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handle($content, Closure $next)
    {
        if ($this->request->get("price") !== null && $this->request->get('price') !== '') {
            $prices = explode("&", $this->request->get("price"));
            $price_range = [];
            collect($prices)->map(function($price) use (&$price_range) {
                array_push($price_range, explode("-", str_replace('price=', '', $price)));
            });

            $content = $content->where(function ($query) use ($price_range) {
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
        return $next($content);
    }
}
