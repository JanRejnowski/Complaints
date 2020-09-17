<?php

/** @var Factory $factory */

use App\Machine;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Machine::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
