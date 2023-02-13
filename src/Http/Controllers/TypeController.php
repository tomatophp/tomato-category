<?php

namespace TomatoPHP\TomatoCategory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class TypeController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'tomato-category::types.index',
            table: \TomatoPHP\TomatoCategory\Tables\TypeTable::class,
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
            model: \TomatoPHP\TomatoCategory\Models\Type::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-category::types.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\Type\TypeStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoCategory\Http\Requests\Type\TypeStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoCategory\Models\Type::class,
            message: __('Type created successfully'),
            redirect: 'admin.types.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Type $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoCategory\Models\Type $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-category::types.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Type $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoCategory\Models\Type $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-category::types.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\Type\TypeUpdateRequest $request
     * @param \TomatoPHP\TomatoCategory\Models\Type $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoCategory\Http\Requests\Type\TypeUpdateRequest $request, \TomatoPHP\TomatoCategory\Models\Type $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('Type updated successfully'),
            redirect: 'admin.types.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Type $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoCategory\Models\Type $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: __('Type deleted successfully'),
            redirect: 'admin.types.index',
        );
    }
}
