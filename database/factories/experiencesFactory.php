<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\experiences;
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

$factory->define(experiences::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->numberBetween(1000000, 9999999),
        'design' => $faker->numberBetween(1, 5),
        'web' => $faker->numberBetween(1, 5),
        'coding' => $faker->numberBetween(1, 5),
        'networks' => $faker->numberBetween(1, 5),
        'hacking' => $faker->numberBetween(1, 5),
        'drawing' => $faker->numberBetween(1, 5),
        'sketching' => $faker->numberBetween(1, 5),
        'planing' => $faker->numberBetween(1, 5),
        'internal' => $faker->numberBetween(1, 5),
        'robots' => $faker->numberBetween(1, 5),
        'chemicals' => $faker->numberBetween(1, 5),
    ];
});
