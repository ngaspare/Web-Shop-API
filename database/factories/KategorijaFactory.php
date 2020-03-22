<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kategorija;
use Faker\Generator as Faker;

$factory->define(Kategorija::class, function (Faker $faker) {
    return [
        'naziv' => $faker->name(),
        'opis' => $faker->text(),
    ];
});
