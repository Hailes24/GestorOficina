<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_fatura',
        'endereco',
        'cliente_id',
        'fatura_id',
        'user_id',

    ];

    public function clientes()
    {
        return $this->belongsTo(Cliente::class,'cliente_id');
    }
}
