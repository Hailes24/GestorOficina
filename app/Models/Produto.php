<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable =[
        'nome',
        'foto',
        'categoria_id',
        'cor',
        'preco_compra',
        'preco_venda',
        'qtd_stock',
        'fabricante',
        'localizacao',
        'descricao',
        'lucro',
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    public function ordem()
    {
        return $this->hasMany(ordemDeServico::class,'produto_id','id');
    }
    
}
