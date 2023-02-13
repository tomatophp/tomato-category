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
           \TomatoPHP\TomatoCategories\Console\TomatoCategoriesInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/tomato-categories.php', 'tomato-categories');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/tomato-categories.php' => config_path('tomato-categories.php'),
        ], 'tomato-categories-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'tomato-categories-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tomato-categories');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/tomato-categories'),
        ], 'tomato-categories-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tomato-categories');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => app_path('lang/vendor/tomato-categories'),
        ], 'tomato-categories-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        TomatoMenuRegister::registerMenu(CategoryMenu::class);

    }

    public function boot(): void
    {
        //you boot methods here
    }
}
