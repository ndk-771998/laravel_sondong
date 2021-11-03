<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Post\Contracts\ViewPostDetailControllerInterface;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostDetailController as BasePostDetailController;

class PostDetailController extends BasePostDetailController implements ViewPostDetailControllerInterface
{
    use PrepareOption;

    public function view() {
        return 'pages.post-detail';
    }

    public function viewData($post, Request $request) {
        $hot_posts = Post::where('is_hot', 1)->limit(5)->get();
        $related_posts = Post::limit(5)->get();

        return [
            'hot_posts' => $hot_posts,
            'related_posts' => $related_posts
        ];
    }
}
