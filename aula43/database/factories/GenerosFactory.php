<?php

use Faker\Generator as Faker;

$factory->define(App\Genero::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'ranking' => $faker->unique()->numberBetween(100,200),
        'active' => $faker->boolean($chanceOfGettingTrue = 80),            
    ];
});
