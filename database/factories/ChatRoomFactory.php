<?php

use Faker\Generator as Faker;

$factory->define(App\ChatRoom::class, function (Faker $faker) {
    return [
        'title' => $faker->words($nb = 3, $asText = true)
    ];
});
