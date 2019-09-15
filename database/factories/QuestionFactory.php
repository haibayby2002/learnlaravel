<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Question;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Question::class, function (Faker $faker) {
    $title = trim($faker->sentence(), '.');
    return [
        'title' => $title,
        'content' => $faker->paragraph(rand(3,6)),
        'votes' => rand(-10, 10),
        'views' => rand(5,15),
        'slug' => Str::slug($title)
    ];
});
