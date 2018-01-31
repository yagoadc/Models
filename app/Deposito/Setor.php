<?php

namespace App\Deposito;

use App\Deposito\Empregado;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{    
	// Referência à tabela 'sectors'.
    protected $table = 'sectors';
    // Define 'name' como chave primária.
    protected $primaryKey = 'name';
    // Determina que a chave primária não é incremental.
    public $incrementing = false;
    // Determina o tipo da chave primária como string.
    protected $keyType = 'string';
    // Determina que não há timestamps.
    public $timestamps = false;
    // Lista de colunas liberadas para mass assignment.
    protected $fillable = ['name', 'boss'];
    // Oculta a relação empregados.
    protected $hidden = ['name'];

    //Lista todos os empregados que trabalham no setor.
    public function empregados() {

    	return $this->belongsToMany('Empregado', 'employer_sector', 'sector_name', 'employer_register');
    }
    // Alocar empregado para o setor.
    public static function alocar_empregado($setor, $empregado) {
    	// Procura o setor.
    	$setor = static::find($setor);
    	// Relaciona o empregado com o setor.
    	$setor->empregados()->attach($empregado);
    }
    // Desalocar empregado do setor.
    public static function desalocar_empregado($setor, $empregado) {
    	// Procura o empregado.
    	$setor = static::find($setor);
    	//Procura o empregado.
    	$setor->empregados()->detach($empregado);
    }
}
