<?php

namespace App\Providers;

use App\Entities\Post;
use App\Entities\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\MenuComposer;
use App\Http\View\Composers\SlideComposer;
use App\Http\View\Composers\NewsComposer;
use App\Http\Controllers\Web\PostListController;
use App\Http\Controllers\Web\PostDetailController;
use App\Http\Controllers\Web\ProductListController;
use App\Http\Controllers\Web\ProductDetailController;
use App\Http\View\Composers\OptionComposer;
use VCComponent\Laravel\Product\Contracts\ViewProductListControllerInterface;
use VCComponent\Laravel\Product\Contracts\ViewProductDetailControllerInterface;
use VCComponent\Laravel\Post\Contracts\ViewPostListControllerInterface;
use VCComponent\Laravel\Post\Contracts\ViewPostDetailControllerInterface;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ViewProductListControllerInterface::class, ProductListController::class);
        $this->app->bind(ViewProductDetailControllerInterface::class, ProductDetailController::class);
        $this->app->bind(ViewPostListControllerInterface::class, PostListController::class);
        $this->app->bind(ViewPostDetailControllerInterface::class, PostDetailController::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'posts'      => Post::class,
            'products'   => Product::class,
        ]);

       View::composer('*', MenuComposer::class);
       View::composer('*', SlideComposer::class);
       View::composer('*', NewsComposer::class);
       View::composer('*', OptionComposer::class);
    }
}
