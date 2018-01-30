<?php

namespace App\Deposito;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'sectors';

    protected $fillable = ['name', 'boss'];
}
