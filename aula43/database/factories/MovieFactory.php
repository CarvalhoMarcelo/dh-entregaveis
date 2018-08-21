<?php

use Faker\Generator as Faker;

Schema::disableForeignKeyConstraints();
$factory->define(App\Movie::class, function (Faker $faker) {
    Schema::disableForeignKeyConstraints();
    return [
        'title' => $faker->name,
        'rating' => $faker->numberBetween(1,10),
        'awards' => $faker->numberBetween(1,10),
        //'release_date' => $faker->dateTimeBetween($startDate='2 - months',$endDate='now',$timezone=null),
        'revenue' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 10), 
        'director_id' => $faker->numberBetween(1,120),
    ];
});
Schema::enableForeignKeyConstraints();
