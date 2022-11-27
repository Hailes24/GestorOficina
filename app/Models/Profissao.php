<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissao extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
    ];
}
