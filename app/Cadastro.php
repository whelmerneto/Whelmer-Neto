<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = 'cadastro';

    protected $fillable = [
        'name', 'email', 'password', 'sexo', 'idade', 'celular'
    ];

    public $timestamps = false;

}
