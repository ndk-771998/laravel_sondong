<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Post\Contracts\ViewPostDetailControllerInterface;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostDetailController as BasePostDetailController;

class PostDetailController extends BasePostDetailController implements ViewPostDetailControllerInterface
{
    public function view()
    {
        return 'pages.new-detail';
    }

    public function viewData($post, Request $request)
    {
        SEOMeta::setTitle($post->title);
        SEOMeta::setDescription($post->description);
        OpenGraph::setTitle($post->title);
        OpenGraph::setDescription($post->description);
        OpenGraph::addImage($post->thumbnail);
        $relatedPosts = Post::ofType('posts')
            ->where('id', '<>', $post->id)
            ->latest()
            ->limit(3)
            ->get();

        $title        = 'Tin Tức';
        $urlBreadcumb = 'posts';
        $comments     = $post->getLatestComment(10)->where('status', 1);

        return [
            'title'        => $title,
            'relatedPosts' => $relatedPosts,
            'urlBreadcumb' => $urlBreadcumb,
            'comments'     => $comments,
        ];
    }

    public function viewExhibition()
    {
        return 'pages.new-detail';
    }

    public function viewDataExhibition($post, Request $request)
    {
        $title        = 'Hỗ trợ triển lãm cưới';
        $relatedPosts = Post::ofType('exhibition')
            ->where('id', '<>', $post->id)
            ->latest()
            ->limit(3)
            ->get();

        $urlBreadcumb = 'exhibition';

        $comments = $post->getLatestComment(10);

        return [
            'title'        => $title,
            'relatedPosts' => $relatedPosts,
            'urlBreadcumb' => $urlBreadcumb,
            'comments'     => $comments,
        ];
    }

    public function viewPlace()
    {
        return 'pages.new-detail';
    }

    public function viewDataPlace($post, Request $request)
    {
        $title        = 'Địa điểm cưới lãng mạn';
        $relatedPosts = Post::ofType('place')
            ->where('id', '<>', $post->id)
            ->latest()
            ->limit(3)
            ->get();

        $urlBreadcumb = 'place';

        $comments = $post->getLatestComment(10);

        return [
            'title'        => $title,
            'relatedPosts' => $relatedPosts,
            'urlBreadcumb' => $urlBreadcumb,
            'comments'     => $comments,
        ];
    }

    public function viewPages()
    {
        return 'pages.about';
    }
}