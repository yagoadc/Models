<?php

namespace App\Estoque;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	// Define se deve ou não inserir timestamps na tabela.
    public $timestamps = false;
    // Indica quais colunas podem ser atribuidas em massa.
    protected $fillable = ['code', 'name', 'category', 'provider'];
    // Método que retorna de que fornecedor é o produto.
    public function fornecedor() {
      // Fornecedor do produto.
      return $this->belongsTo('App\Estoque\Fornecedor', 'provider', 'name');
    }
}
