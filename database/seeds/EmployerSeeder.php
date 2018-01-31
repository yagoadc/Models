<?php

use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    // Seeder de empregados.
    public function run()
    {
        DB::table('employers')->insert([
        	'register' => 1111,
        	'name' => 'José Victor',
        ]);

        DB::table('employers')->insert([
        	'register' => 1112,
        	'name' => 'Victor',
        ]);

        DB::table('employers')->insert([
        	'register' => 1113,
        	'name' => 'Maurício',
        ]);

        DB::table('employers')->insert([
        	'register' => 1114,
        	'name' => 'Gabriel Bitencourt',
        ]);

    }
}
