<?php

namespace VCComponent\Laravel\User\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use VCComponent\Laravel\User\Auth\Auth as AuthHelper;
use VCComponent\Laravel\User\Contracts\AdminUserController;
use VCComponent\Laravel\User\Contracts\Auth;
use VCComponent\Laravel\User\Contracts\AuthValidatorInterface;
use VCComponent\Laravel\User\Contracts\FrontendUserController;
use VCComponent\Laravel\User\Contracts\UserValidatorInterface;
use VCComponent\Laravel\User\Http\Controllers\Admin\UserController as AdminController;
use VCComponent\Laravel\User\Http\Controllers\AuthController;
use VCComponent\Laravel\User\Http\Controllers\Frontend\UserController as FrontendController;
use VCComponent\Laravel\User\Http\Middleware\EmailVerify;
use VCComponent\Laravel\User\Repositories\StatusRepository;
use VCComponent\Laravel\User\Repositories\StatusRepositoryEloquent;
use VCComponent\Laravel\User\Repositories\UserRepository;
use VCComponent\Laravel\User\Repositories\UserRepositoryEloquent;
use VCComponent\Laravel\User\Validators\AuthValidator;
use VCComponent\Laravel\User\Validators\UserValidator;

class UserComponentProvider extends ServiceProvider
{
    private $adminController;
    private $frontendController;
    private $authController;
    private $userValidator;
    private $authValidator;
    private $auth;

    protected $middlewareAliases = [
        'vcc.user.email.verify' => EmailVerify::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->parseConfig();

        $this->registerRepositories();

        $this->registerControllers();

        $this->registerValidators();

        $this->registerFacades();
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // $this->publishes([
        //     __DIR__ . '/../../migrations/' => database_path('migrations'),
        // ], 'migrations');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations/');

        $this->publishes([
            __DIR__ . '/../../config/user.php'                   => config_path('user.php'),
            __DIR__ . '/../../views/auth/errow-verify.blade.php' => base_path('/resources/views/auth/errow-verify.blade.php'),
            __DIR__ . '/../../views/auth/verify.blade.php'       => base_path('/resources/views/auth/verify.blade.php'),

        ], 'config');

        $this->loadViewsFrom(
            __DIR__ . '/../../resources/views', 'user_component'
        );

        $this->registerMiddleware();
    }

    protected function parseConfig()
    {
        if (config('user.controllers.admin') === null) {
            $this->adminController = AdminController::class;
        } else {
            $this->adminController = config('user.controllers.admin');
        }

        if (config('user.controllers.frontend') === null) {
            $this->frontendController = FrontendController::class;
        } else {
            $this->frontendController = config('user.controllers.frontend');
        }

        if (config('user.controllers.auth') === null) {
            $this->authController = AuthController::class;
        } else {
            $this->authController = config('user.controllers.auth');
        }

        if (config('user.validators.user') === null) {
            $this->userValidator = UserValidator::class;
        } else {
            $this->userValidator = config('user.validators.user');
        }

        if (config('user.validators.auth') === null) {
            $this->authValidator = AuthValidator::class;
        } else {
            $this->authValidator = config('user.validators.auth');
        }
    }

    protected function registerRepositories()
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(StatusRepository::class, StatusRepositoryEloquent::class);
    }

    protected function registerControllers()
    {
        $this->app->bind(AdminUserController::class, $this->adminController);
        $this->app->bind(FrontendUserController::class, $this->frontendController);
        $this->app->bind(Auth::class, $this->authController);
    }

    protected function registerValidators()
    {
        $this->app->bind(UserValidatorInterface::class, $this->userValidator);
        $this->app->bind(AuthValidatorInterface::class, $this->authValidator);
    }

    protected function registerFacades()
    {
        $this->app->bind('vcc.auth', AuthHelper::class);
    }

    protected function registerMiddleware()
    {
        $router = $this->app['router'];

        $method = 'aliasMiddleware';
        if (!method_exists($router, $method)) {
            throw new \Exception("${$method} method does not exist");
        }

        foreach ($this->middlewareAliases as $alias => $middleware) {
            $router->$method($alias, $middleware);
        }
    }
}
