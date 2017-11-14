<?php

namespace sisonenet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'nombre'=>'required|max:120',
            'apellido'=>'required|max:220',
            'dni'=>'required',
            'telefono'=>'required',
            //'email'=>'email',
            'direccion'=>'required',
            'imagen_satelital'=>'mimes:jpeg,bmp,png,gif',
            'nombre_de_usuario'=>'required|unique:users,name',
            'clave'=>'required'
        ];
    }
}
