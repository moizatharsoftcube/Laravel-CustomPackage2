<?php

namespace moizatharsoftcube\laravelcustompackage2;

use Illuminate\Support\ServiceProvider;

class CustomPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('moizatharsoftcube\laravelcustompackage2\CustomPackageController');
        $this->loadViewsFrom(__DIR__.'/views','laravelcustompackage2');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__."/routes.php";
    }
}
