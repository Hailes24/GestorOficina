<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
            'nome',
            'email',
            'telemovel',
            'user_id',
    ];

    public function ordem()
    {
        return $this->hasMany(ordemDeServico::class,'cliente_id','id');
    }
    public function venda()
    {
        return $this->hasMany(Venda::class,'cliente_id','id');
    }

}
