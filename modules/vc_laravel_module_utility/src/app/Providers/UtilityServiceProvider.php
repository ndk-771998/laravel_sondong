<?php

namespace VCComponent\Laravel\Utility\Providers;

use Illuminate\Support\ServiceProvider;

class UtilityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'utility');
        $this->publishes([
            __DIR__ . '/../../resources/sass/utility/css/_hotline.scss' =>base_path('/resources/sass/utility/css/_hotline.scss'),
            __DIR__ . '/../../resources/sass/utility/icon-2.png' => base_path('/public/images/utility/icon-2.png'),
        ]);
    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
