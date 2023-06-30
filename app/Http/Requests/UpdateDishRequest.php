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
            'description' => 'nullable',
            'price' => 'required|decimal:2',
            'visible' => 'required|boolean',
            'image' => 'nullable|string|max:255',
            'tipologies' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Il campo è obbligatorio',
            'name.string' => 'Il campo deve essere una stringa',
            'name.max' => 'Il campo può avere massimo 255 caratteri',
            'name.min' => 'Il campo può avere minimo 3 caratteri',
            'price.required' => 'Il campo è obbligatorio',
            'price.decimal' => 'Il campo deve avere 2 decimali',
            'visible.required' => 'Il campo è obbligatorio',
            'tipologies.required' => 'Il campo è obbligatorio',
            'visible.boolean' => 'Il campo deve essere booleano',
            'image.string' => 'Il campo deve essere una stringa',
            'image.max' => 'Il campo può avere massimo 255 caratteri',
        ];
    }
    private function toBoolean($booleable)
    {
        return filter_var($booleable, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'visible' => $this->toBoolean($this->visible),
        ]);
    }
}
