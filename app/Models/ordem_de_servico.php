<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordem_de_servico extends Model{
    use HasFactory;
    protected $fellable=[
        'idFuncionario','idproduto','idVeiculo','dadaEntrega','dataHora','descricaoDoservico','DescricaoCliente',
    
    ];

}
