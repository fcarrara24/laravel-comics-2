<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
        //rules to update
        return [
            'title' => 'required|min:5|max:255',
            'series' => 'required|min:5|max:255',
            'sale_date' => 'required|date|date_format:Y-m-d',
            'price' => 'required|min:3|max:20',
            'type' => 'required|min:3|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'il campo titolo è richiesto',
            'title.min' => 'la lunghezza minima del titolo deve essere di :min caratteri',
            'title.max' => 'la lunghezza massima del titolo deve essere di :max caratteri',

            'series.required' => 'il campo serie è richiesto',
            'series.min' => 'la lunghezza minima del serie deve essere di :min caratteri',
            'series.max' => 'la lunghezza massima del serie deve essere di :max caratteri',

            'sale_date.required' => 'il campo date è richiesto',
            'sale_date.date' => 'date deve essere in formato data',
            'sale_date.date_format' => 'la data deve essere espressa in anni-mesi-giorni',
            'price.required' => 'il prezzo è richiesto',
            'price.min' => 'il prezzo deve essere di minimo :min caratteri ',
            'price.max' => 'il prezzo puo essere di massimo :max caratteri',

            'type.required' => 'il tipo è richiesto',
            'type.min' => 'il tipo deve essere di minimo :min caratteri ',
            'type.max' => 'il tipo puo essere di massimo :max caratteri',
        ];
    }
}
