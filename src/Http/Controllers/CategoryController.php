<?php

namespace TomatoPHP\TomatoCategory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;
use TomatoPHP\TomatoTranslations\Services\HandelTranslationInput;

class CategoryController extends Controller
{
    use HandelTranslationInput;

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View|JsonResponse
    {
        return Tomato::index(
            request: $request,
            model: \TomatoPHP\TomatoCategory\Models\Category::class,
            view: 'tomato-category::categories.index',
            table: \TomatoPHP\TomatoCategory\Tables\CategoryTable::class,
            resource: config('tomato-category.categories_resource', null),
            filters: [
                "for"
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
            model: \TomatoPHP\TomatoCategory\Models\Category::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-category::categories.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\Category\CategoryStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoCategory\Http\Requests\Category\CategoryStoreRequest $request): RedirectResponse|JsonResponse
    {
        $this->translate($request);
        if(!$request->has('slug') || empty($request->slug)) {
            $request->merge(['slug' => Str::slug($request->get('name_tomato_translations_'.app()->getLocale()))]);
        }
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoCategory\Models\Category::class,
            message: __('Category created successfully'),
            redirect: 'admin.categories.index',
            hasMedia: true,
            collection: [
                "image"=>false
            ]
        );

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Category $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoCategory\Models\Category $model): View|JsonResponse
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-category::categories.show',
            hasMedia: true,
            collection: [
                "image"=>false
            ]
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Category $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoCategory\Models\Category $model): View
    {
        $this->loadTranslation($model, ['name', 'description']);
        return Tomato::get(
            model: $model,
            view: 'tomato-category::categories.edit',
            hasMedia: true,
            collection: [
                "image"=>false
            ]
        );
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Http\Requests\Category\CategoryUpdateRequest $request
     * @param \TomatoPHP\TomatoCategory\Models\Category $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoCategory\Http\Requests\Category\CategoryUpdateRequest $request, \TomatoPHP\TomatoCategory\Models\Category $model): RedirectResponse|JsonResponse
    {
        $this->translate($request);
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('Category updated successfully'),
            redirect: 'admin.categories.index',
            hasMedia: true,
            collection: [
                "image"=>false
            ]
        );

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoCategory\Models\Category $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoCategory\Models\Category $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::destroy(
            model: $model,
            message: __('Category deleted successfully'),
            redirect: 'admin.categories.index',
        );

        $response->redirect;
    }
}
