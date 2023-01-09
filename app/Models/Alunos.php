<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'idade',
        'tipocadastro',
        'turma',
        'ano',
        'responsavel',
        'qtdereprovas',
        'escolaanterior',
        'data_cadastro'
    ];
}
