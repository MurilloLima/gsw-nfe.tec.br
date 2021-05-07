<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cod' => $faker->numerify(),
        'descryption' => $faker->text(),
        'ncm' => '01202236',
        'uni_medida' => 'Kg',
        'valor' => '1000'
    ];
});
