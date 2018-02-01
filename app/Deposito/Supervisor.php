<?php

namespace App\Deposito;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $primarykey= 'codigo';
    public $incrementing= false;
    protected $fillable = ['nome','codigo'];
}
