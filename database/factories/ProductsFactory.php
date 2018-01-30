<?php

use App\Estoque\Product;
use App\Estoque\Fornecedor;

use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'code' => rand(1000, 9999),
        'name' => $faker->word,
        'category' =>$faker->word, 
        'provider'=> $faker->randomElement(Fornecedor::lista()),
    ];
});
