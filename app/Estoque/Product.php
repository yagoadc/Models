<?php

namespace App\Estoque;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['code', 'name', 'category', 'provider'];
    //
    public function fornecedor() {
      //
      return $this->belongsTo('App\Estoque\Fornecedor', 'provider', 'name');
    }
}
