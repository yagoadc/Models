<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerSectorTable extends Migration
{
    // Tabela pivô de empregado e setor.
    public function up()
    {
        Schema::create('employer_sector', function (Blueprint $table) {
            $table->integer('employer_register');
            $table->string('sector_name');
        });

        Schema::table('employer_sector', function (Blueprint $table) {
            $table->foreign('employer_register')
                  ->references('register')
                  ->on('employers');
            $table->foreign('sector_name')
                  ->references('name')
                  ->on('sectors');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employer_sector');
    }
}
