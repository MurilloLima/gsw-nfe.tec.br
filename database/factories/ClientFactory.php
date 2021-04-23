<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cpf' => '000.000.000-00',
        'cnpj' => '000.000.000/0000',
        'andress' => $faker->address,
        'phone' => $faker->phoneNumber,
        'bairro' => $faker->address,
        'cep' => $faker->postcode,
        'complemento' => $faker->text(),
        'cidade' => $faker->state,
        'uf' => $faker->state
    ];
});
