<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Park::class, function (Faker $faker) {
    return [
        'name' => $faker->words('2', true),
    ];
});
