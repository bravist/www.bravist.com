<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\Contracts\ManagerRepositoryContract::class, \App\Repositories\Eloquents\ManagerEloquentRepository::class);
        $this->app->bind(\App\Repositories\Contracts\RoleRepositoryContract::class, \App\Repositories\Eloquents\RoleEloquentRepository::class);
        $this->app->bind(\App\Repositories\Contracts\PermissionRepositoryContract::class, \App\Repositories\Eloquents\PermissionEloquentRepository::class);
    }
}
