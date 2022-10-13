<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'idFuncionario','idcliente','placa','modelo','marca','combustivel','cor',        
    ];
}
