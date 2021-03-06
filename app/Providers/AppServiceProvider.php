<?php

namespace App\Providers;

use Identicon\Identicon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * https://laravel-news.com/laravel-5-4-key-too-long-error
         * Laravel 5.4 uses the utf8mb4 character set by default, which includes support for storing "emojis" in the database. If you are running a version of MySQL older than the 5.7.7 release or MariaDB older than the 10.2.2 release
         */
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Create a new Identicon object
        $this->app->singleton('Bravist\Identicon', function ($app) {
            return new Identicon();
        });
    }
}
