<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCatererRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'image' => 'sometimes|required|image',
            'phone_number' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome non può essere vuoto',
            'address.required' => "L'indirizzo non può essere vuoto",
            'image.required' => "L'immagine deve essere selezionata",
            'phone_number' => 'Il numero di telefono non può essere vuoto'
        ];
    }
}
