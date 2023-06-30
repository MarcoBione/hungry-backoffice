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
            'image' => 'required',
            'phone_number' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo è obbligatorio',
            'address.required' => 'Il campo è obbligatorio',
            'image.required' => 'Il campo è obbligatorio',
            'phone_number' => 'Il campo è obbligatorio'
        ];
    }
}
