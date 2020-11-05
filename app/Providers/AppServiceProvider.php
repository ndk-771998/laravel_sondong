<?php

namespace App\Providers;

use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\PostDetailController;
use App\Http\Controllers\Web\PostListController;
use App\Http\Controllers\Web\ProductDetailController;
use App\Http\Controllers\Web\ProductListController;
use App\Http\View\Composers\CartComposer;
use App\Http\View\Composers\MenuComposer;
use App\Http\View\Composers\NewsComposer;
use App\Http\View\Composers\SlideComposer;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use VCComponent\Laravel\Order\Contracts\ViewCartControllerInterface;
use VCComponent\Laravel\Post\Contracts\ViewPostDetailControllerInterface;
use VCComponent\Laravel\Post\Contracts\ViewPostListControllerInterface;
use VCComponent\Laravel\Product\Contracts\ViewProductDetailControllerInterface;
use VCComponent\Laravel\Product\Contracts\ViewProductListControllerInterface;

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

        $this->app->bind(ViewCartControllerInterface::class, CartController::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'posts'    => Post::class,
            'products' => Product::class,
        ]);

        View::composer('*', CartComposer::class);
        View::composer('*', MenuComposer::class);
        View::composer('*', SlideComposer::class);
        View::composer('*', NewsComposer::class);
    }
}
