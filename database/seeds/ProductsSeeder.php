<?php

use App\Estoque\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    // Seeder de produtos.
    public function run()
    {
        factory(Product::class, 30)->create();
    }
}
