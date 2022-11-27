<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{
    use HasFactory;

        protected $fillable =[
        'num_item',
        'qtd',
        'preco_unit',
        'preco_total',
        'produto_id',
        'venda_id'
    ];
}
