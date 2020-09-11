<?php

namespace Aminetiyal\LaravelAdminlte;

use Illuminate\Support\ServiceProvider;

class AdminlteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-adminlte');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__. '/../config/adminlte.php' => config_path('adminlte.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-adminlte'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-adminlte'),
            ], 'assets');*/



            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__. '/../config/adminlte.php', 'adminlte');
    }
}
