<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Messages;
use Faker\Generator as Faker;

$factory->define(Messages::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'subject' => $faker->sentence(),
        'message' => $faker->paragraphs(),
    ];
});
