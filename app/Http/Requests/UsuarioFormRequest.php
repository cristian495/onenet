<?php

namespace sisonenet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
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
            'nombre_de_usuario'=>'required|unique:users,name',
            'email_de_usuario'=>'email',
            'clave'=>'min:6'
        ];
    }
}
