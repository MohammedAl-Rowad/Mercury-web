<?php

use Faker\Generator as Faker;



$factory->define(Mercury\Message::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(Mercury\User::pluck('id')->toArray()),
        'from_id' => $faker->randomElement(Mercury\User::pluck('id')->toArray()),
        'body' => $faker->randomElement([null, $faker->emoji() ,null , null , null]) .
            $faker->realText(20). $faker->randomElement([null, $faker->emoji()]),

    ];
});
