<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Model;
use App\Topic;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $title = $faker->sentence(5),
        'slug' => Str::slug($title),
    ];
});
