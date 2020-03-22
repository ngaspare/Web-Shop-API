<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proizvod;
use Faker\Generator as Faker;

$factory->define(Proizvod::class, function (Faker $faker) {
    return [
        'naziv' => $faker->name(),
        'opis' => $faker->text(),
        'cijena' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000)
    ];
});
