<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Business::class, function (Faker $faker) {
    return [
        'company_name'  => $faker->company,
        'role'          => $faker->jobTitle,
    ];
});
