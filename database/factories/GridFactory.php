<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Grid;
use Faker\Generator as Faker;

$factory->define(Grid::class, function (Faker $faker) {
    return [
        'link_id' => null
    ];
});
