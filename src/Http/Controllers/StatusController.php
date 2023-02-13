<?php

namespace TomatoPHP\TomatoCategory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class StatusController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'tomato-category::status.index',
            table: \TomatoPHP\TomatoCategory\Tables\StatusTable::class,
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
            model: \TomatoPHP\TomatoCategory\Models\Status::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-category::status.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\Status\StatusStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoCategory\Http\Requests\Status\StatusStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoCategory\Models\Status::class,
            message: __('Status created successfully'),
            redirect: 'admin.status.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Status $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoCategory\Models\Status $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-category::status.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Status $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoCategory\Models\Status $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-category::status.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\Status\StatusUpdateRequest $request
     * @param \TomatoPHP\TomatoCategory\Models\Status $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoCategory\Http\Requests\Status\StatusUpdateRequest $request, \TomatoPHP\TomatoCategory\Models\Status $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('Status updated successfully'),
            redirect: 'admin.status.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Status $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoCategory\Models\Status $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: __('Status deleted successfully'),
            redirect: 'admin.status.index',
        );
    }
}
