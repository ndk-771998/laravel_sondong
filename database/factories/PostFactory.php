<?php

use App\Entities\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'       => $faker->words(rand(4, 7), true),
        'description' => $faker->sentences(rand(4, 7), true),
        'content'     => $faker->paragraphs(rand(4, 7), true),
    ];
});

$factory->state(Post::class, 'pages', function () {
    return [
        'type' => 'pages',
    ];
});

$factory->state(Post::class, 'constructions', function () {
    return [
        'type' => 'constructions',
    ];
});

$factory->state(Post::class, 'slides', function () {
    return [
        'type' => 'slides',
    ];
});
