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
            view: 'category::categories-metas.index',
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
            model: \TomatoPHP\TomatoCategory\Entities\CategoriesMeta::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'category::categories-metas.create',
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
            model: \TomatoPHP\TomatoCategory\Entities\CategoriesMeta::class,
            message: __('CategoriesMeta created successfully'),
            redirect: 'admin.categories-metas.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Entities\CategoriesMeta $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoCategory\Entities\CategoriesMeta $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'category::categories-metas.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Entities\CategoriesMeta $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoCategory\Entities\CategoriesMeta $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'category::categories-metas.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\CategoriesMeta\CategoriesMetaUpdateRequest $request
     * @param \TomatoPHP\TomatoCategory\Entities\CategoriesMeta $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoCategory\Http\Requests\CategoriesMeta\CategoriesMetaUpdateRequest $request, \TomatoPHP\TomatoCategory\Entities\CategoriesMeta $model): RedirectResponse
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
     * @param \TomatoPHP\TomatoCategory\Entities\CategoriesMeta $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoCategory\Entities\CategoriesMeta $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: __('CategoriesMeta deleted successfully'),
            redirect: 'admin.categories-metas.index',
        );
    }
}
