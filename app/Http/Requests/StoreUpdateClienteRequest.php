<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClienteRequest extends FormRequest
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
        $id = $this->segment(2);
        return [
            'nome'       => 'required',
            'email'         => "email|required|unique:clientes,email,{$id},id",
            'telemovel'     => "required|min:9|max:9|unique:clientes,telemovel,{$id},id",
        ];
    }
    public function messages()
    {
        return [
            'required'=>'O campo não pode estar em branco',
            'email'=>'Digite um endereço de email válido',
            'email.unique'=> 'Este email já está cadastrado',
            'telemovel.unique'=> 'Este Telemovel já está cadastrado',
            'telefone.min'=>'É necessário no mínimo 9 caracteres ',
            'telefone.max'=>'É necessário 9 caracteres ao máximo',
            'nome.min'=>'Nome inválido',
            'nome.max'=>'Nome inválido',

        ];
    }
}
