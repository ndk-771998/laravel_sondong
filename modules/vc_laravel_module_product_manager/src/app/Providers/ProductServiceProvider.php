<?php

namespace VCComponent\Laravel\Product\Providers;

use Illuminate\Support\ServiceProvider;
use VCComponent\Laravel\Product\Contracts\ProductListViewModelInterface;
use VCComponent\Laravel\Product\Contracts\ViewProductDetailControllerInterface;
use VCComponent\Laravel\Product\Contracts\ViewProductListControllerInterface;
use VCComponent\Laravel\Product\Http\Controllers\Web\ProductDetailController as ViewProductDetailController;
use VCComponent\Laravel\Product\Http\Controllers\Web\ProductListController as ViewProductListController;
use VCComponent\Laravel\Product\Repositories\ProductRepository;
use VCComponent\Laravel\Product\Repositories\ProductRepositoryEloquent;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../database/migrations/' => database_path('migrations'),
        ], 'migrations');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->publishes([
            __DIR__ . '/../../config/product.php' => config_path('product.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views/', 'product-manager');

    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductRepository::class, ProductRepositoryEloquent::class);
        $this->registerControllers();
    }

    private function registerControllers()
    {

        $this->app->bind(ViewProductDetailControllerInterface::class, ViewProductDetailController::class);
    }
}
