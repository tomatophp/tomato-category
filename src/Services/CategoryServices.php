<?php

namespace TomatoPHP\TomatoCategory\Services;

use Illuminate\Support\Collection;
use TomatoPHP\TomatoAdmin\Facade\TomatoWidget as TomatoWidgetFacade;
use TomatoPHP\TomatoCategory\Facades\TomatoCategory;
use TomatoPHP\TomatoCategory\Services\Contracts\LoadControllerFunctions;
use TomatoPHP\TomatoCategory\Services\Contracts\LoadRoutes;
use TomatoPHP\TomatoCategory\Services\Contracts\RegisterNewType;

class CategoryServices
{
    use LoadControllerFunctions;
    use LoadRoutes;

    public Collection $types;

    public function __construct()
    {
        $this->types = collect([]);
    }

    public function loadFromSource(): static
    {
        $this->types = TomatoCategory::load();
        return $this;
    }

    /**
     * @return Collection
     */
    public static function get(): Collection
    {
         return (new static)->loadFromSource()->build()->load();
    }

    /**
     * @return Collection
     */
    public function load(): Collection
    {
        return $this->types;
    }

    /**
     * @return $this
     */
    private function build(): static
    {
        $this->types = $this->types;
        return $this;
    }
}
