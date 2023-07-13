<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
            'status' => 'required|max:150|min:3',
        ];
    }

    /**
     * Get the validation messages.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            "status.required" => "Lo stato dell'ordine è obbligatorio",
            "status.max" => "Lo stato dell'ordine non deve superare i 150 caratteri",
            "status.min" => "Lo stato dell'ordine deve essere lungo almeno 3 caratteri",
        ];
    }
}
