<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'breif' => $faker->sentence(50),
        'body' => $faker->sentence(150),
        'image'=>$faker->imageUrl(640,480),
        'user_id'=>$faker->numberBetween(1,2),
    ];
});
