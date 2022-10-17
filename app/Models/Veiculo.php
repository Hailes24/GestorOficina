<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cliente_id',
        'marca',
        'placa',
        'combustivel',
        'cor',
        'modelo',

    ];

    public function ordem()
    {
        return $this->hasMany(ordemDeServico::class,'veiculo_id','id');
    }
}
