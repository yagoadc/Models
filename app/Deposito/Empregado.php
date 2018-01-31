<?php

namespace App\Deposito;

use App\Deposito\Setor;
use Illuminate\Database\Eloquent\Model;

class Empregado extends Model
{
	// Referência à tabela 'employers'.
    protected $table = 'employers';
    // Coluna 'register' como chave primária.
    protected $primaryKey = 'register';
    // Determina que a chave primária é não incremental.
    public $incrementing = false;
    // Define a chave primária como string.
    protected $keyType = 'string';
    // Determina que não há timestamps.
    public $timestamps = false;
    // Lista de colunas liberadas para mass assignment.
    protected $fillable = ['register', 'name'];
	// Oculta a relação empregados.
    // protected $hidden = [$this->setores];

    // Lista os setores no qual o empregado trabalha.
    public function setores() {

    	return $this->belongsToMany('Setor', 'employer_sector', 'employer_register', 'sector_name');

    }
    // O que há de errado aqui?
    public function novo_setor($setor) {

    	return $this->attach($setor);

    }
}
