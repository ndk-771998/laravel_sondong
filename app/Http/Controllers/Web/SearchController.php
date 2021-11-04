<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    use PrepareOption;
    
    public function search(Request $request)
    {
        $post_results = Post::ofType('posts');
        $post_results = $this->applySearchFromRequest($post_results, ['title', 'description', 'content'], $request)->paginate(6);
        $audio_results = Post::ofType('audio');
        $audio_results = $this->applySearchFromRequest($audio_results, ['title', 'description'], $request)->paginate(6);
        $television_results = Post::ofType('television');
        $television_results = $this->applySearchFromRequest($television_results, ['title', 'description'], $request)->paginate(6);

        return view('pages.search', [
            'post_results' => $post_results,
            'audio_results' => $audio_results,
            'television_results' => $television_results,
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
