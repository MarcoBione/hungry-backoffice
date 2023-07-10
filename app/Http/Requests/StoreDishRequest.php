<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
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
            'image' => 'nullable|image',
            'tipologies' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Il nome non può essere uoto',
            'name.string' => 'Il nome deve essere una stringa',
            'name.max' => 'Il nome può avere massimo 255 caratteri',
            'name.min' => 'Il nome può avere minimo 3 caratteri',
            'price.required' => 'Il prezzo non può essere vuoto',
            'price.decimal' => 'Il prezzo deve avere 2 numeri dopo la virgola',
            'visible.required' => 'La visibilità deve essere selezionata',
            'tipologies.required' => 'La tipologia non può essere vuota, altrimenti il ristorante non potrebbe appartenere a nessuna sezione del menù',
            'visible.boolean' => 'La visibilità deve essere un campo booleano',
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
