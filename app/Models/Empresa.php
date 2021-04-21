<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'name',
        'inscricao',
        'cnpj',
        'phone',
        'address',
        'bairro',
        'uf',
        'cidade',
        'cep',
        'email'
    ];
}
