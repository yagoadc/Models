<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    //
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code')->unique();
            $table->string('name');
            $table->string('category');
            $table->string('provider');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('provider')
                  ->references('name')
                  ->on('providers');
        });
    }

    //
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
