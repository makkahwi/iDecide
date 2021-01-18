<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\scores;
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

$factory->define(scores::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->numberBetween(1000000, 9999999),
        'it' => $faker->numberBetween(1, 5),
        'chemistry' => $faker->numberBetween(1, 5),
        'physics' => $faker->numberBetween(1, 5),
        'math' => $faker->numberBetween(1, 5),
        'arts' => $faker->numberBetween(1, 5),
    ];
});
