<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // use HasFactory;
    protected $table = 'clientes';
    protected $fillable = [
        'nome',
        'documento',
        'tipodoc',
        'sexo',
        'bairro',
        'municipio',
        'estado',
        'cep',
        'telefone',
        'created_at',
        'updated_at',
        'endereco'
    ];
}
