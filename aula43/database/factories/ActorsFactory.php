<?php

use Faker\Generator as Faker;

$factory->define(App\Actor::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'rating' => $faker->numberBetween(1,10),
        'favorite_movie_id' => $faker->numberBetween(1,120),
    ];
});
