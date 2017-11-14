<?php

namespace sisonenet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagoMensualidadFormRequest extends FormRequest
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
            'idcliente'=>'required|intenger',
            'fecha_hora_pagado'=>'required|max:30',
            'tipo_combrobante'=>'required|max:8',
            'serie_comprobante'=>'max:20',
            'num_comprobante'=>'required:max|20',
            'impuesto' => 'numeric|between:0,99.99',
            'costo_total' => 'required|numeric|between:0,4999.99',
        ];
    }
}
