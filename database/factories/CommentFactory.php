<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'comment_text' => $faker->paragraphs($nb = 3, $asText = true),
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'board_id' => $faker->numberBetween($min = 1, $max = 3)
    ];
});
