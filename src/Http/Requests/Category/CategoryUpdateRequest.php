<?php

namespace TomatoPHP\TomatoCategory\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'parent_id' => 'nullable|exists:categories,id',
            'name' => 'required|array|min:1',
            'name.*' => 'required|max:255|string',
            'description' => 'nullable|array|min:1',
            'description.*' => 'nullable|max:255|string',
            'icon' => 'nullable|max:255|string',
            'color' => 'nullable|max:255|string',
            'activated' => 'nullable',
            'menu' => 'nullable',
            'for' => 'sometimes|max:255|string'
        ];
    }
}
