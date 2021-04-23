<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'descryption' => $faker->text(),
        'cfop' => '555',
        'ncm' => '01202236',
        'uni_medida' => 'Kg',
        'valor' => '1000'
    ];
});
