<?php

namespace TomatoPHP\TomatoCategory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class CategoryController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'category::categories.index',
            table: \TomatoPHP\TomatoCategory\Tables\CategoryTable::class,
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function api(Request $request): JsonResponse
    {
        return Tomato::json(
            request: $request,
            model: \TomatoPHP\TomatoCategory\Entities\Category::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'category::categories.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\Category\CategoryStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoCategory\Http\Requests\Category\CategoryStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoCategory\Entities\Category::class,
            message: __('Category created successfully'),
            redirect: 'admin.categories.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Entities\Category $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoCategory\Entities\Category $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'category::categories.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Entities\Category $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoCategory\Entities\Category $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'category::categories.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\Category\CategoryUpdateRequest $request
     * @param \TomatoPHP\TomatoCategory\Entities\Category $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoCategory\Http\Requests\Category\CategoryUpdateRequest $request, \TomatoPHP\TomatoCategory\Entities\Category $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('Category updated successfully'),
            redirect: 'admin.categories.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Entities\Category $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoCategory\Entities\Category $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: __('Category deleted successfully'),
            redirect: 'admin.categories.index',
        );
    }
}
