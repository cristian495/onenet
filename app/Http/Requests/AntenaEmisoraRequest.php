<?php

namespace sisonenet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AntenaEmisoraRequest extends FormRequest
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
            'essid'=>'required|max:120',
            'nombre'=>'required|max:50',
            'marca'=>'required|max:100',
            'modelo'=>'required|max:100',
            'serie'=>'max:100',
            'frecuencia'=>'max:10',
            'ip'=>'max:32',
            'mac'=>'max:25',
            'imagen'=>'mimes:jpeg,bmp,png,gif'
        ];

    }
}
