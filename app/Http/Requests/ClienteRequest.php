<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome'=>'required | min:3 | max:255',
            'telefone'=>'required | min:10 |max:11',
            'documento_tipo'=>'required | min:11 | max:14',
            'documento'=>'required',
            'sexo'=>'required | min:2 | max:2',
            'endereco'=>'required',
            'bairro'=>'required',
            'estado'=>'required',
            'cep'=>'required',
        ];

    }
    public function messages()
    {
        return[
            'nome.min'=>'o nome precisa ter no mínimo 3 caracteres',
        ];
    }
}
