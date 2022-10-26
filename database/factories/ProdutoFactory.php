<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        'nome_produto' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'descricao_produto' => $faker->text($maxNbChars = 100),
        'preco_produto' => $faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 9000),
        'id_categoria' => $faker->numberBetween($min = 1, $max = 82)
    ];
});
