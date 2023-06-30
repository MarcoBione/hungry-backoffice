<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDishRequest extends FormRequest
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
            'name' => 'required|string|max:255|min:3',
            'description' => 'nullable|string|min:3',
            'price' => 'required|decimal:2',
            'visible' => 'required|boolean',
            'image' => 'nullable|string|max:255',
            'tipologies' => 'required',
        ];
    }
}
