<?php

/** @var Factory $factory */

use App\Defect;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Defect::class, function (Faker $faker) {
    return [
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        'name' => $faker->asciify("*************************"),
        'defect_place' => $faker->asciify("*************************"),
    ];
});
