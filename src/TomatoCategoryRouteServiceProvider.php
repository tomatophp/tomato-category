<?php

namespace TomatoPHP\TomatoCategory;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoAdmin\Facade\TomatoMenu;
use TomatoPHP\TomatoAdmin\Services\Contracts\Menu;
use TomatoPHP\TomatoCategory\Services\TomatoCategoryHandler;
use TomatoPHP\TomatoCategory\Menus\CategoryMenu;
use TomatoPHP\TomatoCategory\Services\CategoryServices;


class TomatoCategoryRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function (){
            \TomatoPHP\TomatoCategory\Services\CategoryServices::loadRoutes();
        });
    }

}
