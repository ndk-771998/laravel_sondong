<?php

namespace VCComponent\Laravel\Config\Test;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use VCComponent\Laravel\Config\Providers\ConfigServiceProvider;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return HaiCS\Laravel\Generator\Providers\GeneratorServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [ConfigServiceProvider::class];
    }

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->withFactories(__DIR__ . '/../src/database/factories');
        // $this->loadMigrationsFrom(__DIR__ . '/../src/database/migrations');
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
        $app['config']->set('step', [
            [
                'label'  => 'Step1',
                'inputs' => [
                    [
                        'label' => 'input1',
                        'type'  => 'text',
                    ],
                ],
            ],
            [
                'label'  => 'Step2',
                'inputs' => [
                    [
                        'label' => 'input2',
                        'type'  => 'textarea',
                    ],
                    [
                        'label' => 'input2.1',
                        'type'  => 'text',
                    ],
                ],
            ],
            [
                'label'  => 'Step3',
                'inputs' => [
                    [
                        'label' => 'input3',
                        'type'  => 'image',
                    ],
                ],
            ],
        ]);
    }
}
