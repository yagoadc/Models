<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidersSeeder extends Seeder
{
    // Seeders de fornecedores.
    public function run()
    {
        DB::table('providers')->insert([
        	'name' => 'Coca Cola',
        	'estado' => 'São Paulo',
        ]);

        DB::table('providers')->insert([
        	'name' => 'Elma Chips',
        	'estado' => 'Minas Gerais',
        ]);

        DB::table('providers')->insert([
        	'name' => 'Princesa',
        	'estado' => 'Rio de Janeiro',
        ]);

        DB::table('providers')->insert([
        	'name' => 'Michelin',
        	'estado' => 'Amazonas',
        ]);

        DB::table('providers')->insert([
        	'name' => 'Perdigão',
        	'estado' => 'São Paulo',
        ]);

        DB::table('providers')->insert([
        	'name' => 'Ypioca',
        	'estado' => 'Ceará',
        ]);

        DB::table('providers')->insert([
        	'name' => 'Acriléx',
        	'estado' => 'Santa Catarina',
        ]);

        DB::table('providers')->insert([
        	'name' => 'Motorola',
        	'estado' => 'São Paulo',
        ]);

        DB::table('providers')->insert([
        	'name' => 'Chamex',
        	'estado' => 'Paraná',
        ]);

        DB::table('providers')->insert([
        	'name' => 'Loreal',
        	'estado' => 'Rio de Janeiro',
        ]);
    }
}
