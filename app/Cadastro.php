<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable = [
        'eleitor', 'endereco','telefone','senha','email','foto'
    ];
}