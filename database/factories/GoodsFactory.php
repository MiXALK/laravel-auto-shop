<?php

use Faker\Generator as Faker;

$factory->define(App\Good::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'short_description' => $faker->name,
        'description' => $faker->word,
        'icon' => $faker->word,
    ];
});
