<?php

namespace App\Deposito;

use App\Deposito\Setor;
use Illuminate\Database\Eloquent\Model;

class Empregado extends Model
{
    protected $table = 'employers';

    protected $primaryKey = 'register';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = ['register', 'name'];

    public function sectores() {

    	return $this->belongsToMany('Setor', 'employer_sector', 'register', 'name');

    }

}
