<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DodavanjeNarudzbeRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'ukupna_cijena' => 'required',
            'ime'           => 'required',
            'prezime'       => 'required',
            'email'         => 'required',
            'broj_telefona' => 'required',
            'adresa'        => 'required',
            'grad'          => 'required',
            'drzava'        => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ukupna_cijena.required' => 'Ukupna cijena je obavezna.',
            'ime.required'           => 'Ime je obavezno.',
            'prezime.required'       => 'Prezime je obavezno.',
            'email.required'         => ':attribute je obavezan.',
            'broj_telefona.required' => 'Broj telefona je obavezna.',
            'adresa.required'        => 'Adresa je obavezna.',
            'grad.required'          => 'Grad je obavezan.',
            'drzava.required'        => 'Država je obavezna.'
        ];
    }
}
