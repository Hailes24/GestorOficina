<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordemDeServico extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'veiculo_id',
        'user_id',
        'produto_id',
        'data_entrega',
        'data_revisao',
        'descricao',
        'preco',
        'recomendacao',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id');
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class,'veiculo_id');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class,'produto_id');
    }
}
