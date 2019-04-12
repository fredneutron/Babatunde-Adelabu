<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'title' => $faker->title,
        'excerpt' => $faker->text(400),
        'body' => $faker->randomHtml(),
        'featured_image' => $faker->imageUrl(),
        'featured_image_caption' => $faker->text(30),
    ];
});
