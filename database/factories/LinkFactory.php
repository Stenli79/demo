<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Link;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Link::class, function (Faker $faker) {
    return [
        'title' => Str::random(15),
        'link' => $faker->url(),
        'sequence' => $faker->numerify('###'),
        'color' => function () {
            return factory(App\Models\Color::class)->create()->color_hex;
        }
    ];
});
