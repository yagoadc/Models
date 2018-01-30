<?php

namespace App\Estoque;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //
    protected $table = 'providers';
    //
    protected $primaryKey = 'name';
    //
    protected $incrementing = false;
    //
    protected $keyType = 'string';
    //
    protected $guarded = ['name', 'estado'];
    //
    public function products() {

      return $this->hasMany('App\Estoque\Product', 'provider', 'name');
      
    }
}
