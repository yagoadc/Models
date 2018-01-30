<?php

use Illuminate\Database\Seeder;

class EmployerSectorSeeder extends Seeder
{
    // Seeder de ligação
    public function run()
    {
        DB::table('employer_sector')->insert([
        	'employer_register' => 1111,
        	'sector_name' => 'Alimentos',
        ]);

        DB::table('employer_sector')->insert([
        	'employer_register' => 1111,
        	'sector_name' => 'Bebidas',
        ]);

        DB::table('employer_sector')->insert([
        	'employer_register' => 1111,
        	'sector_name' => 'Eletrônicos',
        ]);

        DB::table('employer_sector')->insert([
        	'employer_register' => 1112,
        	'sector_name' => 'Alimentos',
        ]);

        DB::table('employer_sector')->insert([
        	'employer_register' => 1112,
        	'sector_name' => 'Bebidas',
        ]);

        DB::table('employer_sector')->insert([
        	'employer_register' => 1113,
        	'sector_name' => 'Alimentos',
        ]);

        DB::table('employer_sector')->insert([
        	'employer_register' => 1113,
        	'sector_name' => 'Bebidas',
        ]);

        DB::table('employer_sector')->insert([
        	'employer_register' => 1114,
        	'sector_name' => 'Bebidas',
        ]);

        DB::table('employer_sector')->insert([
        	'employer_register' => 1114,
        	'sector_name' => 'Eletrônicos',
        ]);
    }
}
