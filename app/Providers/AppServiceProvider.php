<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\MenuComposer;
use App\Http\View\Composers\SlideComposer;
use App\Http\View\Composers\NewsComposer;
use App\Http\View\Composers\CartComposer;
use App\Http\Controllers\Web\PostListController;
use App\Http\Controllers\Web\PostDetailController;
use App\Http\Controllers\Web\ProductListController;
use App\Http\Controllers\Web\ProductDetailController;
use VCComponent\Laravel\Product\Contracts\ViewProductListControllerInterface;
use VCComponent\Laravel\Product\Contracts\ViewProductDetailControllerInterface;
use VCComponent\Laravel\Post\Contracts\ViewPostListControllerInterface;
use VCComponent\Laravel\Post\Contracts\ViewPostDetailControllerInterface;

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
       View::composer('*', MenuComposer::class);
       View::composer('*', SlideComposer::class);
       View::composer('*', NewsComposer::class);
       View::composer('*', CartComposer::class);
    }
}
