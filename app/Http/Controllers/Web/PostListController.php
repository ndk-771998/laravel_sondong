<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Entities\Product;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Config\Services\Facades\Option;
use VCComponent\Laravel\Post\Contracts\ViewPostListControllerInterface;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostListController as BasePostListController;

class PostListController extends BasePostListController implements ViewPostListControllerInterface
{
    use PrepareOption;

    /**
     * return view name of posts list page, or the orther posttype without specific view function.
     * 
     * @return string
     */
    public function view() {
        return 'pages.post-list';
    }

    /**
     * return data which will be include in view or the orther posttype without specific viewData function.
     * 
     * @return array
     */
    public function viewData($posts, Request $request) {
        
        return [];
    }

    // public function viewPages() 
    // {
    //     return 'p'
    // }
    // public function viewDataPages($posts, Request $request) {
        
    //     return [];
    // }

    /**
     * return data which will be include in view or the orther posttype without specific viewData function.
     * 
     * @return array
     */
    public function viewDataRadios($posts, Request $request)
    {

    }

    public function viewTelevisions() {
        return 'pages.television-list';
    }

    public function viewDataTelevisions($posts, Request $request)
    {
        return [];
    }
}
