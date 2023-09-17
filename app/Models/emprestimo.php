<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emprestimo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_leitor',
        'nome_leitor',
        'id_livro',
        'nome_livro',
        'data_saida',
        'data_retorno',
        'status',
        'observacao'
    ];
}
