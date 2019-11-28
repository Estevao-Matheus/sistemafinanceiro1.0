<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicoFormRequest extends FormRequest
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
            //

            'nome' => 'required|min:2',
            'descricao' => 'required',
            'preco' => 'required|min:4',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório',
            'nome.min' => 'O campo Nome precisa ter pelo menos 4 caracteres',
            'descricao.required' => 'O campo Endereço é obrigatório',
            'preco.required' => 'O campo Telefone é obrigatório',
            'preco.min' => 'O campo Telefone precisa ter pelo menos 4 caracteres'
        ];
    }



}
