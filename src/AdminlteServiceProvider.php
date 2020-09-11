<?php

namespace Aminetiyal\LaravelAdminlte;
// Partials
use Aminetiyal\LaravelAdminlte\Components\Partials\Breadcrumb;
use Aminetiyal\LaravelAdminlte\Components\Partials\ControlSidebar;
use Aminetiyal\LaravelAdminlte\Components\Partials\Footer;
use Aminetiyal\LaravelAdminlte\Components\Partials\MenuItem;
use Aminetiyal\LaravelAdminlte\Components\Partials\Navbar;
use Aminetiyal\LaravelAdminlte\Components\Partials\PageHeader;
use Aminetiyal\LaravelAdminlte\Components\Partials\Scripts;
use Aminetiyal\LaravelAdminlte\Components\Partials\Sidebar;
use Aminetiyal\LaravelAdminlte\Components\Partials\SidebarLink;
use Aminetiyal\LaravelAdminlte\Components\Partials\SidebarMenu;
use Aminetiyal\LaravelAdminlte\Components\Partials\Styles;
// Layouts
use Aminetiyal\LaravelAdminlte\Components\Layouts\Main;
use Illuminate\Support\ServiceProvider;

class AdminlteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadComponents();
        /*
         * Optional methods to load your package assets
         */
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'adminlte');

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

    public function loadComponents()
    {
        $this->loadPartialsComponents();
        $this->loadLayoutsComponents();
        $this->loadFormsComponents();
    }

    public function loadPartialsComponents()
    {
        $this->loadViewComponentsAs('lte', [
            Sidebar::class,
            SidebarLink::class,
            SidebarMenu::class,
            ControlSidebar::class,
            Navbar::class,
            Styles::class,
            Scripts::class,
            Footer::class,
            MenuItem::class,
            Breadcrumb::class,
            PageHeader::class,
        ]);
    }

    public function loadLayoutsComponents()
    {
        $this->loadViewComponentsAs('lte', [
            Main::class
        ]);
    }

    public function loadFormsComponents()
    {
        $this->loadViewComponentsAs('lte', [
            //
        ]);
    }
}
