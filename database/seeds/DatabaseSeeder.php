<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // Invocando todas as seeders.
    public function run()
    {
        $this->call([
        	ProvidersSeeder::class,
        	ProductsSeeder::class,
        ]);
    }
}