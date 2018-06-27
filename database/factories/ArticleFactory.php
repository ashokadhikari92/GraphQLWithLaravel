<?php

use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'title'       => $faker->text(50),
        'content'     => $faker->realText(500),
        'status'      => $faker->boolean,
        'author_id'   => $faker->randomElement(\App\Author::all()->pluck('id')->toArray()),
        'category_id' => $faker->randomElement(\App\Category::all()->pluck('id')->toArray()),
    ];
});
