<?php

namespace App\Deposito;

use Illuminate\Database\Eloquent\Model;

class Empregado extends Model
{
    protected $table = 'employers';

    protected $fillable = ['register', 'name'];
}
