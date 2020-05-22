<?php

namespace VCComponent\Laravel\Utility\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use VCComponent\Laravel\Utility\Http\View\Composers\SlideComposer;

class UtilityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'utility');
        $this->publishes([
            __DIR__ . '/../../resources/scss/utility/css/_hotline.scss' => base_path('/resources/sass/utility/_hotline.scss'),
            __DIR__ . '/../../resources/scss/utility/icon-2.png' => base_path('/public/images/utility/icon-2.png'),
        ]);
    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
        View::composer('*', SlideComposer::class);
    }
}
