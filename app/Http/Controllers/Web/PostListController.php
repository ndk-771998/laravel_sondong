<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Config\Services\Facades\Option;
use VCComponent\Laravel\Post\Contracts\ViewPostListControllerInterface;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostListController as BasePostListController;

class PostListController extends BasePostListController implements ViewPostListControllerInterface
{
    public function viewPolicy() 
    {
        return 'pages.page';
    }

    public function viewDataPolicy($posts, Request $request)
    {
        $posts_menu = Post::select(['title', 'slug', 'type'])->where('type', 'policy')->paginate(12);

        $post = new Post();
        $post_type_label = array_search('policy' ,$post->postTypes());
        
        if(count($posts)) {
            return [
                'post'              => $posts[0],
                'posts_menu'        => $posts_menu,
                'post_type_label'   => $post_type_label,
            ];
        }
        return [
            'post'              => $post,
            'post_type_label'   => $post_type_label,
            'posts_menu'        => $posts_menu,
        ];
    }
    
    public function viewPromotion() 
    {
        return 'pages.page';
    }

    public function viewDataPromotion($posts, Request $request)
    {
        $posts_menu = Post::select(['title', 'slug', 'type'])->where('type', 'promotion')->paginate(12);

        $post = new Post();
        $post_type_label = array_search('promotion' ,$post->postTypes());
        
        if(count($posts)) {
            return [
                'post'              => $posts[0],
                'posts_menu'        => $posts_menu,
                'post_type_label'   => $post_type_label,
            ];
        }
        return [
            'post'              => $post,
            'post_type_label'   => $post_type_label,
            'posts_menu'        => $posts_menu,
        ];
    }
    
    public function viewAboutus() 
    {
        return 'pages.page';
    }

    public function viewDataAboutus($posts, Request $request)
    {
        $posts_menu = Post::select(['title', 'slug', 'type'])->where('type', 'aboutus')->paginate(12);

        $post = new Post();
        $post_type_label = array_search('aboutus' ,$post->postTypes());
        
        if(count($posts)) {
            return [
                'post'              => $posts[0],
                'posts_menu'        => $posts_menu,
                'post_type_label'   => $post_type_label,
            ];
        }
        return [
            'post'              => $post,
            'post_type_label'   => $post_type_label,
            'posts_menu'        => $posts_menu,
        ];
    }
    
    public function viewRepairservice() 
    {
        return 'pages.page';
    }

    public function viewDataRepairservice($posts, Request $request)
    {
        $posts_menu = Post::select(['title', 'slug', 'type'])->where('type', 'repairservice')->paginate(12);

        $post = new Post();
        $post_type_label = array_search('repairservice' ,$post->postTypes());
        
        if(count($posts)) {
            return [
                'post'              => $posts[0],
                'posts_menu'        => $posts_menu,
                'post_type_label'   => $post_type_label,
            ];
        }
        return [
            'post'              => $post,
            'post_type_label'   => $post_type_label,
            'posts_menu'        => $posts_menu,
        ];
    }
}
