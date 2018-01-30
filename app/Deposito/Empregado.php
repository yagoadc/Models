<?php

namespace App\Deposito;

use Illuminate\Database\Eloquent\Model;

class Empregado extends Model
{
	//
    public $timestamps = false;
    protected $table = 'employers';

    protected $fillable = ['register', 'name'];
}
