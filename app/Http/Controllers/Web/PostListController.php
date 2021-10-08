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

    protected function beforeQuery(Request $request) {
        $request->merge([
            'per_page' => 12,
        ]);
    }

    public function viewPolicy() 
    {
        return 'pages.page';
    }

    public function viewDataPolicy($posts, Request $request)
    {
        $this->prepareOption();

        $post = new Post();
        $post_type_label = array_search('policy' ,$post->postTypes());

        if(count($posts)) {
            $post = $posts[0];

            SEOMeta::setTitle($post->getMetaField('seo_title'));
            SEOMeta::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::setTitle($post->getMetaField('seo_title'));
            OpenGraph::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::addImage($post->thumbnail);

            return [
                'post'              => $post,
                'posts_menu'        => $posts,
                'post_type_label'   => $post_type_label,
            ];
        }
        return [
            'post'              => $post,
            'post_type_label'   => $post_type_label,
            'posts_menu'        => $posts,
        ];
    }
    
    public function viewPromotion() 
    {
        return 'pages.page';
    }

    public function viewDataPromotion($posts, Request $request)
    {
        $this->prepareOption();

        $post = new Post();
        $post_type_label = array_search('promotion' ,$post->postTypes());
        
        if(count($posts)) {
            $post = $posts[0];

            SEOMeta::setTitle($post->getMetaField('seo_title'));
            SEOMeta::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::setTitle($post->getMetaField('seo_title'));
            OpenGraph::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::addImage($post->thumbnail);

            return [
                'post'              => $post,
                'posts_menu'        => $posts,
                'post_type_label'   => $post_type_label,
            ];
        }
        return [
            'post'              => $post,
            'post_type_label'   => $post_type_label,
            'posts_menu'        => $posts,
        ];
    }
    
    public function viewAboutus() 
    {
        return 'pages.page';
    }

    public function viewDataAboutus($posts, Request $request)
    {
        $this->prepareOption();
        
        $post = new Post();
        $post_type_label = array_search('aboutus' ,$post->postTypes());
        
        if(count($posts)) {
            $post = $posts[0];

            SEOMeta::setTitle($post->getMetaField('seo_title'));
            SEOMeta::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::setTitle($post->getMetaField('seo_title'));
            OpenGraph::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::addImage($post->thumbnail);

            return [
                'post'              => $post,
                'posts_menu'        => $posts,
                'post_type_label'   => $post_type_label,
            ];
        }
        return [
            'post'              => $post,
            'post_type_label'   => $post_type_label,
            'posts_menu'        => $posts,
        ];
    }
    
    public function viewRepairservice() 
    {
        return 'pages.page';
    }

    public function viewDataRepairservice($posts, Request $request)
    {
        $this->prepareOption();
        
        $post = new Post();
        $post_type_label = array_search('repairservice' ,$post->postTypes());

        if(count($posts)) {
            $post = $posts[0];

            SEOMeta::setTitle($post->getMetaField('seo_title'));
            SEOMeta::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::setTitle($post->getMetaField('seo_title'));
            OpenGraph::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::addImage($post->thumbnail);

            return [
                'post'              => $post,
                'posts_menu'        => $posts,
                'post_type_label'   => $post_type_label,
            ];
        }
        return [
            'post'              => $post,
            'post_type_label'   => $post_type_label,
            'posts_menu'        => $posts,
        ];
    }
    
    public function viewCustomermedias() 
    {
        return 'pages.customer-medias';
    }

    public function viewDataCustomermedias($posts, Request $request)
    {
        $this->prepareOption();
        
        SEOMeta::setTitle(getOption('title-seo-customer-media'));
        SEOMeta::setDescription(getOption('desc-seo-customer-media'));
        OpenGraph::setTitle(getOption('title-seo-customer-media'));
        OpenGraph::setDescription(getOption('desc-seo-customer-media'));
        OpenGraph::addImage(getOption('header-logo'));

        $posts = Post::where('type', 'customermedias')->paginate(12);
        $products_best_buy = Product::where('status', 1)->orderBy('sold_quantity')->limit(5)->get();

        return [
            'posts' => $posts,
            'products_best_buy' => $products_best_buy
        ];
    }
}
