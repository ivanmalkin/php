<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'price' => $faker->randomFloat(2, 100, 50000),
        'photo' => $faker->imageUrl(350, 350),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
