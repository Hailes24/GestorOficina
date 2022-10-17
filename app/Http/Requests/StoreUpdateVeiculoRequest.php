<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateVeiculoRequest extends FormRequest
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
            'user_id',
            'cliente_id',
            'marca',
            'placa'=>"required|unique:veiculos,placa,{$id},id",
            'combustivel',
            'cor',
            'modelo'=>"required",

        ];
    }
}
