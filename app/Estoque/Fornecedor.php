<?php

namespace App\Estoque;

use App\Estoque\Product;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    // Indica qual tabela a Model deve referencial.
    protected $table = 'providers';
    // Indica qual coluna deve ser considerada chave primária.
    protected $primaryKey = 'name';
    // Define se a chave primária deve ser incremental ou não.
    public $incrementing = false;
    // Define o tipo da chave primária indicada pela Model.
    protected $keyType = 'string';
    // Define se deve ou não inserir timestamps na tabela.
    public $timestamps = false;
    // Indica quais colunas não podem ser atribuídas em massa.
    protected $guarded = ['name', 'estado'];
    // Método para retornar os produtos entregues pelo fornecedor.
    public function produtos() {
      // Produtos do fornecedor.  
      return $this->hasMany('Product', 'provider', 'name');
    }

    // Lista o nome de todos os fornecedores.
    public static function lista() {
        // Retorna a lista de nomes dos fornecedores como um array.
        return static::pluck('name')->toArray();

    }
}
