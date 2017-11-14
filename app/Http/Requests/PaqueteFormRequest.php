<?php

namespace sisonenet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaqueteFormRequest extends FormRequest
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
            'megas_subida'=>'required|between:0,99.999',
            'megas_bajada'=>'required|between:0,99.999',
            'precio_mensual'=>'required',
            'imagen'=>'mimes:jpeg,bmp,png,gif'
        ];
    }
}
