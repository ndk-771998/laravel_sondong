<?php

namespace VCComponent\Laravel\ViewModel\Test;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use VCComponent\Laravel\ViewModel\Providers\ViewModelServiceProvider;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return VCComponent\Laravel\Generator\Providers\GeneratorServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [ViewModelServiceProvider::class];
    }
}
