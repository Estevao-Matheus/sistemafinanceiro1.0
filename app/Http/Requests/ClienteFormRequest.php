<?php

namespace App\Http\Requests;

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

                 'nome' => 'required|min:2',
                 'endereco' => 'required',
                 'telefone' => 'required|min:8',

            //
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório',
            'nome.min' => 'O campo Nome precisa ter pelo menos 2 caracteres',
            'endereco.required' => 'O campo Endereço é obrigatório',
            'telefone.required' => 'O campo Telefone é obrigatório',
            'telefone.min' => 'O campo Telefone precisa ter pelo menos 8 caracteres'
        ];
    }
}
