<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
       'title' => $faker->text(50),
       'user_id' => 1,
       'content' => $faker->text(200),
    ];
});
