<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'receiver' => 'required|max:100|min:3',
            'phone_number' => 'required|max:15|min:7',
            'status' => 'required|max:150|min:3',
            'notes' => 'min:3',
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
            "receiver.required" => "Il nome del destinatario è obbligatorio",
            "receiver.max" => "Il nome del destinatario non deve superare i 100 caratteri",
            "receiver.min" => "Il nome del destinatario deve essere lungo almeno 3 caratteri",
            "phone_number.required" => "Il numero di telefono del destinatario è obbligatorio",
            "phone_number.max" => "Il numero di telefono del destinatario non deve superare i 15 caratteri",
            "phone_number.min" => "Il numero di telefono del destinatario deve essere lungo almeno 7 caratteri",
            "status.required" => "Lo stato dell'ordine è obbligatorio",
            "status.max" => "Lo stato dell'ordine non deve superare i 150 caratteri",
            "status.min" => "Lo stato dell'ordine deve essere lungo almeno 3 caratteri",
            "notes.min" => "Le note dell'ordine devono essere lunghe almeno 3 caratteri",
            "total_price.required" => "Il prezzo totale dell'ordine è obbligatorio",
            "total_price.min" => "Il prezzo totale dell'ordine deve essere maggiore di 0.1 euro",
            "address.required" => "L'indirizzo di consegna dell'ordine è obbligatorio",
            "address.min" => "L'indirizzo di consegna dell'ordine deve essere lungo almeno 3 caratteri"
        ];
    }
}
