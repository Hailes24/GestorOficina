<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model{
    use HasFactory;
    protected   $fillable = [   
        'idCategoria','idFuncionario','precoCompra', 'precoVenda','lucro' ,'nome' ,'codigoBarra','placa','stoqueminimo','stoquemaximo','stok','foto','marca','localizacao',
    ];
}
