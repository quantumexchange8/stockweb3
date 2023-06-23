<?php

namespace App\Providers;
use App\Providers\AuthServiceProvider;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Global Company Name
        view()->share('shortCompName', 'Vanward');
        view()->share('fullCompName', 'Vanward International');

    }
}
