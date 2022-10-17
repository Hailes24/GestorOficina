<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateOdemServicoRequest extends FormRequest
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
        return [
            'cliente_id',
            'veiculo_id',
            'user_id',
            'produto_id',
            'data_entrega'  =>'required',
            'data_revisao'  =>'required',
            'descricao'     =>'required',
            'preco'         =>'required|regex:/^\d+(\.\d{1,2})?$/',
            'recomendacao',
        ];
    }
}
