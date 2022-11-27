<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $fillable = [
       'profissao_id',
       'user_id',
       'num_funcionario',
       'salario',
       'subsidio',
       'telefone',
       'telemovel',
       'data_nasc',
       'endereco',
       'provincia',
       'nacionalidade',
       'foto',
    ];
}
