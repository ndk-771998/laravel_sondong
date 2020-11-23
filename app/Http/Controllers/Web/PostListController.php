<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Post\Contracts\ViewPostListControllerInterface;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostListController as BasePostListController;

class PostListController extends BasePostListController implements ViewPostListControllerInterface
{
    public function view()
    {
        return 'pages.news';
    }

    public function viewData($posts, Request $request)
    {
        SEOMeta::setTitle(getOption('tin-tuc-title'));
        SEOMeta::setDescription(getOption('tin-tuc-description'));
        OpenGraph::setTitle(getOption('tin-tuc-title'));
        OpenGraph::setDescription(getOption('tin-tuc-description'));
        OpenGraph::addImage(getOption('header-logo'));
        $news        = Post::getBy('posts', '1')->paginate(6);
        $title       = 'Tin Tức';
        $urlRedirect = 'posts';

        return [
            'result'      => $news,
            'title'       => $title,
            'urlRedirect' => $urlRedirect,
        ];
    }

    public function viewExhibition()
    {
        return 'pages.news';
    }

    public function viewDataExhibition($posts, Request $request)
    {
        // $news        = Post::oftype('exhibition')->orderBy('id', 'desc')->where('status', '1')->paginate(6);
        $news        = Post::getBy('exhibition', '1')->paginate(6);
        $title       = 'Hỗ trợ triển lãm cưới';
        $urlRedirect = 'exhibition';

        return [
            'result'      => $news,
            'title'       => $title,
            'urlRedirect' => $urlRedirect,
        ];
    }

    public function viewPlace()
    {
        return 'pages.news';
    }

    public function viewDataPlace($posts, Request $request)
    {
        // $news        = Post::oftype('place')->orderBy('id', 'desc')->where('status', '1')->paginate(6);
        $news        = Post::getBy('place', '1')->paginate(6);
        $title       = 'Địa điểm cưới lãng mạng';
        $urlRedirect = 'place';

        return [
            'result'      => $news,
            'title'       => $title,
            'urlRedirect' => $urlRedirect,
        ];
    }
}
