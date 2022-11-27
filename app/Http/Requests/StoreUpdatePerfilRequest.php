<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePerfilRequest extends FormRequest
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
            'profissao_id'=>'required',
            'num_funcionario'=>"unique:perfils,num_funcionario,{$id},id",
            'salario'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'subsidio'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'telefone',
            'telemovel'=>'required|min:9|max:9',
            'data_nasc'=>'required',
            'endereco'=>'required',
            'provincia'=>'required',
            'nacionalidade'=>'required',
            'foto'=>'required|image',
        ];
    }
}
