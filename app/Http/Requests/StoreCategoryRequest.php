<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|max:100|min:3',
            'description' => 'nullable',
            'class' => 'required|max:100',
            'image' => 'required|max:255|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome non può essere vuoto',
            'name.max' => 'Il nome può avere massimo 255 caratteri',
            'name.min' => 'Il nome può avere minimo 3 caratteri',
            'class.required' => 'La classe non può essere vuota',
            'class.max' => 'La classe può avere massimo 100 caratteri',
            'image.required' => "L'immagine non può essere vuota",
            'image.max' => "L'immagine può avere massimo 255 caratteri",
            'image.image' => "L'immagine deve essere un'immagine"
        ];
    }
}
