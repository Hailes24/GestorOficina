<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateServico extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'nome'=>"required|min:3|max:10000|unique:servicos,nome,{$id},id",
            'preco' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'user_id',
        ];
    }
}
