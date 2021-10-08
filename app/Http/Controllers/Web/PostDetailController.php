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
    
    public function viewPolicy() 
    {
        return 'pages.page';
    }

    public function viewDataPolicy($post, Request $request) 
    {
        $this->prepareOption();

        SEOMeta::setTitle($post->getMetaField('seo_title'));
        SEOMeta::setDescription($post->getMetaField('seo_desc'));
        OpenGraph::setTitle($post->getMetaField('seo_title'));
        OpenGraph::setDescription($post->getMetaField('seo_desc'));
        OpenGraph::addImage($post->thumbnail);

        $posts_menu = Post::select(['title', 'slug', 'type'])->where('type', $post->type)->paginate(12);
        $post_type_label = array_search($post->type ,$post->postTypes());
        return [
            'posts_menu'        => $posts_menu,
            'post_type_label'  => $post_type_label,
        ];
    }
    
    public function viewPromotion() 
    {
        return 'pages.page';
    }

    public function viewDataPromotion($post, Request $request) 
    {
        $this->prepareOption();

        SEOMeta::setTitle($post->getMetaField('seo_title'));
        SEOMeta::setDescription($post->getMetaField('seo_desc'));
        OpenGraph::setTitle($post->getMetaField('seo_title'));
        OpenGraph::setDescription($post->getMetaField('seo_desc'));
        OpenGraph::addImage($post->thumbnail);

        $posts_menu = Post::select(['title', 'slug', 'type'])->where('type', $post->type)->paginate(12);
        $post_type_label = array_search($post->type ,$post->postTypes());
        return [
            'posts_menu'        => $posts_menu,
            'post_type_label'  => $post_type_label,
        ];
    }
    
    public function viewAboutus() 
    {
        return 'pages.page';
    }

    public function viewDataAboutus($post, Request $request) 
    {
        $this->prepareOption();

        SEOMeta::setTitle($post->getMetaField('seo_title'));
        SEOMeta::setDescription($post->getMetaField('seo_desc'));
        OpenGraph::setTitle($post->getMetaField('seo_title'));
        OpenGraph::setDescription($post->getMetaField('seo_desc'));
        OpenGraph::addImage($post->thumbnail);

        $posts_menu = Post::select(['title', 'slug', 'type'])->where('type', $post->type)->paginate(12);
        $post_type_label = array_search($post->type ,$post->postTypes());
        return [
            'posts_menu'        => $posts_menu,
            'post_type_label'  => $post_type_label,
        ];
    }
    
    public function viewRepairservice() 
    {
        return 'pages.page';
    }

    public function viewDataRepairservice($post, Request $request) 
    {
        $this->prepareOption();

        SEOMeta::setTitle($post->getMetaField('seo_title'));
        SEOMeta::setDescription($post->getMetaField('seo_desc'));
        OpenGraph::setTitle($post->getMetaField('seo_title'));
        OpenGraph::setDescription($post->getMetaField('seo_desc'));
        OpenGraph::addImage($post->thumbnail);

        $posts_menu = Post::select(['title', 'slug', 'type'])->where('type', $post->type)->paginate(12);
        $post_type_label = array_search($post->type ,$post->postTypes());
        return [
            'posts_menu'        => $posts_menu,
            'post_type_label'  => $post_type_label,
        ];
    }
}
