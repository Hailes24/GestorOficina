<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProdutoRequest extends FormRequest
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
            'nome'=>"required|min:3|max:255|unique:produtos,nome,{$id},id",
            'foto'=>'required|image',
            'categoria',
            'cor',
            'preco_compra'=>"required|regex:/^\d+(\.\d{1,2})?$/",
            'preco_venda' =>"required|regex:/^\d+(\.\d{1,2})?$/",
            'qtd_stock',
            'localizacao',
            'lucro',
            'descricao',
            'categoria_id',
        ];
    }
}
