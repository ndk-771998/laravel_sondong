<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use Illuminate\Http\Request;
use VCComponent\Laravel\Post\Contracts\ViewPostListControllerInterface;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostListController as BasePostListController;

class PostListController extends BasePostListController implements ViewPostListControllerInterface
{
    public function viewNews()
    {
        return 'pages.news';
    }

    public function viewDataNews($posts, Request $request)
    {
        $news  = Post::oftype('posts')->latest()->paginate(6);
        $title = 'Tin Tức';
        return [
            'result' => $news,
            'title'  => $title,
        ];
    }

    public function viewExhibition()
    {
        return 'pages.news';
    }

    public function viewDataExhibition($posts, Request $request)
    {
        $news  = Post::oftype('exhibition')->latest()->paginate(6);
        $title = 'Hỗ trợ triển lãm cưới';
        return [
            'result' => $news,
            'title'  => $title,
        ];
    }

    public function viewPlace()
    {
        return 'pages.news';
    }

    public function viewDataPlace($posts, Request $request)
    {
        $news  = Post::oftype('place')->latest()->paginate(6);
        $title = 'Địa điểm cưới lãng mạng';
        return [
            'result' => $news,
            'title'  => $title,
        ];
    }
}
