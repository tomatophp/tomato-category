<?php

namespace TomatoPHP\TomatoCategory;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoAdmin\Facade\TomatoMenu;
use TomatoPHP\TomatoAdmin\Services\Contracts\Menu;
use TomatoPHP\TomatoCategory\Services\TomatoCategoryHandler;
use TomatoPHP\TomatoCategory\Menus\CategoryMenu;
use TomatoPHP\TomatoCategory\Services\CategoryServices;


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

        $this->app->bind('tomato-category', function () {
            return new TomatoCategoryHandler();
        });

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');


    }

    public function boot(): void
    {
        $menus = [];

        if(config("tomato-category.menu.category")){
            $menus[] = Menu::make()
                ->group(__("Category"))
                ->label(__("Categories"))
                ->icon("bx bxs-category")
                ->route("admin.categories.index");
        }
        if(config("tomato-category.menu.types")){
            $menus[] = Menu::make()
                ->group(__("Category"))
                ->label(__("Types"))
                ->icon("bx bxs-check-circle")
                ->route("admin.types.index");
        }
        TomatoMenu::register($menus);

        $this->app->register(TomatoCategoryRouteServiceProvider::class);

    }
}
