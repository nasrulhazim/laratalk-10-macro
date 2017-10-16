<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;
use Route;

class RouteMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        UrlGenerator::macro('landingPage', function () {
            return route('landingPage');
        });

        UrlGenerator::macro('aboutUs', function () {
            return route('aboutUs');
        });

        Route::macro('landingPage', function () {
            return url()->landingPage();
        });

        Route::macro('aboutUs', function () {
            return url()->aboutUs();
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
