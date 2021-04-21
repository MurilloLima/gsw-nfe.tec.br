<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Empresa;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'inscricao' => '000.000.000.000',
        'cnpj' => '000.000.000.000',
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'bairro' => $faker->address,
        'uf' => $faker->state,
        'cidade' => $faker->city,
        'cep' => $faker->name,
        'email' => $faker->email,
    ];
});
