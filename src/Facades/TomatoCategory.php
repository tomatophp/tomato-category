<?php

namespace TomatoPHP\TomatoCategory\Facades;

use Illuminate\Support\Facades\Facade;
use TomatoPHP\TomatoCategory\Services\Contracts\Type;


/**
 *  @method static \Illuminate\Support\Collection get()
 * @method static \Illuminate\Support\Collection load()
 * @method static \TomatoPHP\TomatoCategory\Contracts\Type register(array|Type $item)
 */
class TomatoCategory extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tomato-category';
    }
}
