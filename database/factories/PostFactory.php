<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentences(3, true),
        'content' => $faker->realText($faker->numberBetween(10, 100))
    ];
});
