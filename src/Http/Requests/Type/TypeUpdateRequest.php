<?php

namespace TomatoPHP\TomatoCategory\Http\Requests\Type;

use Illuminate\Foundation\Http\FormRequest;

class TypeUpdateRequest extends FormRequest
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
                        'name' => 'sometimes|max:255|string',
            'key' => 'sometimes|max:255|string',
            'description' => 'nullable|max:255|string',
            'color' => 'nullable|max:255',
            'icon' => 'nullable|max:255'
        ];
    }
}
