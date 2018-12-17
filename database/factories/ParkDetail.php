<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\ParkDetail::class, function (Faker $faker) {
    return [
        'central_attraction' => $faker->words(2, true),
        'year_opened' => $faker->randomNumber(4),
        'ride_count' => $faker->randomNumber(2),
        'restaurant_count' => $faker->randomNumber(2),
        'size' => $faker->randomNumber(4),
        'resort_count' => $faker->randomNumber(2),
        'fireworks' => $faker->boolean(),
    ];
});
