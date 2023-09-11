<?php

namespace TomatoPHP\TomatoCategory;

use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoCategory\Menus\CategoryMenu;
use TomatoPHP\TomatoPHP\Services\Menu\TomatoMenuRegister;


class TomatoCategoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\TomatoCategory\Console\TomatoCategoriesInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/tomato-category.php', 'tomato-category');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/tomato-category.php' => config_path('tomato-category.php'),
        ], 'tomato-category-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'tomato-category-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tomato-category');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/tomato-category'),
        ], 'tomato-category-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tomato-category');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => app_path('lang/vendor/tomato-category'),
        ], 'tomato-category-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function boot(): void
    {
        //you boot methods here
    }
}
