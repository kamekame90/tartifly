<?php

use Faker\Generator as Faker;

$factory->define(App\Sejour::class, function (Faker $faker) {
    return [
        'libelle' => $faker->word,
        'description' => $faker->word,
        'dure' => $faker->randomDigit,
        'disponibilite' => $faker->boolean,
        'cout' => $faker->randomFloat(20,10,200),
        'photo' => $faker->word,
        'pays' => $faker->word
          ];
});
