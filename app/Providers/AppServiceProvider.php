<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\TodolistService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('TodolistService', TodolistService::class);
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
