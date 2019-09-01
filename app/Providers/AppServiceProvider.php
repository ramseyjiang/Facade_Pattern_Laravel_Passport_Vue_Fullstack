<?php

namespace Fspafs\Providers;

use Fspafs\Contracts\Repositories\UserRepositoryContract;
use Fspafs\Contracts\Services\UserServiceContract;
use Fspafs\Repositories\UserFacadeRepository;
use Fspafs\Services\UserFacadeService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryContract::class, UserFacadeRepository::class);
        $this->app->bind(UserServiceContract::class, UserFacadeService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
