<?php

namespace TomatoPHP\TomatoCategory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class CategoriesMetaController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'tomato-category::categories-metas.index',
            table: \TomatoPHP\TomatoCategory\Tables\CategoriesMetaTable::class,
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
            model: \TomatoPHP\TomatoCategory\Models\CategoriesMeta::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-category::categories-metas.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\CategoriesMeta\CategoriesMetaStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoCategory\Http\Requests\CategoriesMeta\CategoriesMetaStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoCategory\Models\CategoriesMeta::class,
            message: __('CategoriesMeta created successfully'),
            redirect: 'admin.categories-metas.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\CategoriesMeta $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoCategory\Models\CategoriesMeta $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-category::categories-metas.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\CategoriesMeta $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoCategory\Models\CategoriesMeta $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-category::categories-metas.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\CategoriesMeta\CategoriesMetaUpdateRequest $request
     * @param \TomatoPHP\TomatoCategory\Models\CategoriesMeta $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoCategory\Http\Requests\CategoriesMeta\CategoriesMetaUpdateRequest $request, \TomatoPHP\TomatoCategory\Models\CategoriesMeta $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('CategoriesMeta updated successfully'),
            redirect: 'admin.categories-metas.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\CategoriesMeta $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoCategory\Models\CategoriesMeta $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: __('CategoriesMeta deleted successfully'),
            redirect: 'admin.categories-metas.index',
        );
    }
}
