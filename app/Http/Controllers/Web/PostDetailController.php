<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use Illuminate\Http\Request;
use VCComponent\Laravel\Post\Contracts\ViewPostDetailControllerInterface;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostDetailController as BasePostDetailController;

class PostDetailController extends BasePostDetailController implements ViewPostDetailControllerInterface {
    public function view() {
        return 'pages.new-detail';
    }

    public function viewData($post, Request $request) {
        $relatedPosts = Post::ofType('posts')
            ->where('id', '<>', $post->id)
            ->latest()
            ->limit(3)
            ->get();

        $title        = 'Tin Tức';
        $urlBreadcumb = 'posts';

        return [
            'title'        => $title,
            'relatedPosts' => $relatedPosts,
            'urlBreadcumb' => $urlBreadcumb,
        ];
    }

    public function viewExhibition() {
        return 'pages.new-detail';
    }

    public function viewDataExhibition($post, Request $request) {
        $title        = 'Hỗ trợ triển lãm cưới';
        $relatedPosts = Post::ofType('exhibition')
            ->where('id', '<>', $post->id)
            ->latest()
            ->limit(3)
            ->get();

        $urlBreadcumb = 'exhibition';

        return [
            'title'        => $title,
            'relatedPosts' => $relatedPosts,
            'urlBreadcumb' => $urlBreadcumb,
        ];
    }

    public function viewPlace() {
        return 'pages.new-detail';
    }

    public function viewDataPlace($post, Request $request) {
        $title        = 'Địa điểm cưới lãng mạng';
        $relatedPosts = Post::ofType('place')
            ->where('id', '<>', $post->id)
            ->latest()
            ->limit(3)
            ->get();

        $urlBreadcumb = 'place';

        return [
            'title'        => $title,
            'relatedPosts' => $relatedPosts,
            'urlBreadcumb' => $urlBreadcumb,
        ];
    }
}
