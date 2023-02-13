<?php

namespace TomatoPHP\TomatoCategory\Menus;

use TomatoPHP\TomatoPHP\Services\Menu\Menu;
use TomatoPHP\TomatoPHP\Services\Menu\TomatoMenu;

class CategoryMenu extends TomatoMenu
{
    /**
     * @var ?string
     * @example ACL
     */
    public ?string $group = "Category";

    /**
     * @var ?string
     * @example dashboard
     */
    public ?string $menu = "dashboard";

    public function __construct()
    {
        $this->group = __('Category');
    }

    /**
     * @return array
     */
    public static function handler(): array
    {
        return [
            Menu::make()
                ->label(__("Categories"))
                ->icon("bx bxs-category")
                ->route("admin.categories.index"),
            Menu::make()
                ->label(__("Status"))
                ->icon("bx bxs-tag")
                ->route("admin.status.index"),
            Menu::make()
                ->label(__("Types"))
                ->icon("bx bxs-check-circle")
                ->route("admin.types.index"),
        ];
    }
}
