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
            'total_price' => 'required|min:0.1',
            'address' => 'required|min:3'
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
            "total_price.required" => "Il prezzo totale dell'ordine è obbligatorio",
            "total_price.min" => "Il prezzo totale dell'ordine deve essere maggiore di 0.1 euro",
            "address.required" => "L'indirizzo di consegna dell'ordine è obbligatorio",
            "address.min" => "L'indirizzo di consegna dell'ordine deve essere lungo almeno 3 caratteri"
        ];
    }
}
