<?php

namespace VCComponent\Laravel\Generator\Providers;

use Illuminate\Support\ServiceProvider;
use VCComponent\Laravel\Generator\Commands\CreateCommandCommand;
use VCComponent\Laravel\Generator\Commands\CreateControllerCommand;
use VCComponent\Laravel\Generator\Commands\CreateEntityCommand;
use VCComponent\Laravel\Generator\Commands\CreateEventCommand;
use VCComponent\Laravel\Generator\Commands\CreateListenerCommand;
use VCComponent\Laravel\Generator\Commands\CreateMigrationCommand;
use VCComponent\Laravel\Generator\Commands\CreateNotificationCommand;
use VCComponent\Laravel\Generator\Commands\CreatePackageCommand;
use VCComponent\Laravel\Generator\Commands\CreateRepositoryCommand;
use VCComponent\Laravel\Generator\Commands\CreateServiceProviderCommand;
use VCComponent\Laravel\Generator\Commands\CreateTestCommand;
use VCComponent\Laravel\Generator\Commands\CreateTransformerCommand;
use VCComponent\Laravel\Generator\Commands\CreateValidatorCommand;

/**
 * Generator service provider
 */
class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();
    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    /**
     * Register any package commands
     *
     * @return void
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateCommandCommand::class,
                CreatePackageCommand::class,
                CreateEntityCommand::class,
                CreateTestCommand::class,
                CreateControllerCommand::class,
                CreateRepositoryCommand::class,
                CreateValidatorCommand::class,
                CreateServiceProviderCommand::class,
                CreateTransformerCommand::class,
                CreateEventCommand::class,
                CreateListenerCommand::class,
                CreateNotificationCommand::class,
                CreateMigrationCommand::class,
            ]);
        }
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../../config/generator.php' => config_path('generator.php'),
        ]);
    }
}
