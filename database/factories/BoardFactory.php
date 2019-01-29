<?php

use Faker\Generator as Faker;

$factory->define(App\Board::class, function (Faker $faker) {
    return [
        'title' => $faker->words($nb = 3, $asText = true),
        'chat_room_id' => 1
    ];
});
