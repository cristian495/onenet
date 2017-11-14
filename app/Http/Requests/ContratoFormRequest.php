<?php

namespace sisonenet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContratoFormRequest extends FormRequest
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
/*
            'essid'=>'required|max:120',
            'nombre'=>'required|max:50',
            'marca'=>'required|max:100',
            'modelo'=>'required|max:100',
            'serie'=>'max:100',
            'frecuencia'=>'max:10',
            'ip'=>'max:32',
            'mac'=>'max:25',
            'imagen'=>'mimes:jpeg,bmp,png,gif'
*/

            'cliente'=>'required|integer|unique:contrato,idcliente',
            'idpaquete'=>'required|integer',
            'costo_paquete'=>'required',
            'idantena_emisora'=>'required|integer',
            'fecha_inicio_contrato'=>'required|max:40',
            'duracion_contrato'=>'required|max:5',
            'fecha_fin_contrato'=>'required|max:40',
            'fecha_pago_servicio'=>'required|max:40',
            'fecha_corte'=>'required|max:40',
            'costo_instalacion'=>'required',
            'costo_ap'=>'required',
            'tipo_pago_ap'=>'required',
            'tipo_comprobante'=>'required',
            'num_comprobante'=>'required',
            'total_pago'=>'required'
        ];
    }
}
