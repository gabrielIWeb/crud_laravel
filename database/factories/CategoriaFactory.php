<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Categoria;
use Faker\Generator as Faker;

$factory->define(Categoria::class, function (Faker $faker) {
    return [
        'titulo_categoria' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'descricao_categoria' => $faker->text($maxNbChars = 100)
    ];
});
