<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Ride::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
    ];
});
