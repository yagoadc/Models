<?php

namespace App\Deposito;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{    
    protected $table = 'sectors';

    protected $primaryKey = 'name';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = ['name', 'boss'];
}
