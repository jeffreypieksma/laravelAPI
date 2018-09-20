<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
       'title' => $faker->text(50),
       'content' => $faker->text(200),
    ];
});
