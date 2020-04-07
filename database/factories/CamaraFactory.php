<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Camara;
use Faker\Generator as Faker;

$factory->define(Camara::class, function (Faker $faker) {
    return [
        'user_id'   => 1,
        'title'     => $faker->sentence,
        'location'      => $faker->text(800),
        'height'     => $faker->sentence,
        'angle'     => $faker->sentence,
        'url'     => $faker->sentence,
    ];
});
