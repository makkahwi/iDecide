<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\programs;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(programs::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->numberBetween(1000000, 9999999),
        'it' => $faker->numberBetween(1, 3),
        'engineering' => $faker->numberBetween(1, 3),
        'architecture' => $faker->numberBetween(1, 3),
    ];
});
