<?php

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    // Seeder de setores.
    public function run()
    {
        DB::table('sectors')->insert([
        	'name' => 'Alimentos',
        	'boss' => 'Matheus Correia',
        ]);

        DB::table('sectors')->insert([
        	'name' => 'Bebidas',
        	'boss' => 'Wesley Mota',
        ]);

        DB::table('sectors')->insert([
        	'name' => 'Eletrônicos',
        	'boss' => 'Rafaela',
        ]);
    }
}
