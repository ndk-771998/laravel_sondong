<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\MenuComposer;
use App\Http\View\Composers\SlideComposer;
use App\Http\View\Composers\NewsComposer;
use App\Http\View\Composers\CartComposer;
use App\Http\Controllers\Web\ProductListController;
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
