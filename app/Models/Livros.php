<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'titulo',
        'autor',
        'editora',
        'quantidade',
        'categoria',
        'cor',
        'local',
        'observacao'
    ];
}
