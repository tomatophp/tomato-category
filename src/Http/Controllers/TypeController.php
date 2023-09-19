<?php

namespace TomatoPHP\TomatoCategory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;
use TomatoPHP\TomatoTranslations\Services\HandelTranslationInput;

class TypeController extends Controller
{
    use HandelTranslationInput;

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            model: \TomatoPHP\TomatoCategory\Models\Type::class,
            view: 'tomato-category::types.index',
            table: \TomatoPHP\TomatoCategory\Tables\TypeTable::class,
            filters: [
                "for",
                "type"
            ]
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
            filters: [
                'for',
                'type'
            ]
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
    public function store(\TomatoPHP\TomatoCategory\Http\Requests\Type\TypeStoreRequest $request): RedirectResponse|JsonResponse
    {
        $this->translate($request);
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoCategory\Models\Type::class,
            message: __('Type created successfully'),
            hasMedia: true,
            collection: [
                'image'=>false
            ],
        );

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Type $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoCategory\Models\Type $model): View|JsonResponse
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-category::types.show',
            hasMedia: true,
            collection: [
                'image'=>false
            ],
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Type $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoCategory\Models\Type $model): View
    {
        $this->loadTranslation($model, ['name', 'description']);
        return Tomato::get(
            model: $model,
            view: 'tomato-category::types.edit',
            hasMedia: true,
            collection: [
                'image'=>false
            ],
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\Type\TypeUpdateRequest $request
     * @param \TomatoPHP\TomatoCategory\Models\Type $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoCategory\Http\Requests\Type\TypeUpdateRequest $request, \TomatoPHP\TomatoCategory\Models\Type $model): RedirectResponse|JsonResponse
    {
        $this->translate($request);
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('Type updated successfully'),
            redirect: 'admin.types.index',
            hasMedia: true,
            collection: [
                'image'=>false
            ],
        );

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Type $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoCategory\Models\Type $model): RedirectResponse|JsonResponse
    {
        $response =  Tomato::destroy(
            model: $model,
            message: __('Type deleted successfully'),
            redirect: 'admin.types.index',
        );

        return $response->redirect;
    }
}
