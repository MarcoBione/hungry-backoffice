<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'vat_number' => ['string', 'max:11' ],
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'Il nome deve essere una stringa di caratteri',
            'name.max' => 'Il nome può avere massimo 255 caratteri',
            'email.email' => "L'email deve essere in un formato valido. Es: nome.cognome@gmail.com",
            'email.max' => "L'email può avere massimo 255 caratteri",
            'vat_number.string' => 'La partita iva deve essere una stringa di caratteri',
            'vat_number.max' => 'La partita iva può avere massimo 255 caratteri'
        ];
    }
}
