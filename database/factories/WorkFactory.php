<?php

use Faker\Generator as Faker;

$factory->define(App\Work::class, function (Faker $faker) {
    return [
        'position' => $faker->jobTitle,
        'company_name' => $faker->company,
        'description' => $faker->paragraphs(5),
        'start_on' => $faker->dateTime,
        'end_on' => $faker ->dateTime,
    ];
});
