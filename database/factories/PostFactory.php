<?php

use App\Entities\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'       => $faker->words(rand(3, 4), true),
        'description' => $faker->sentences(rand(3, 4), true),
        'content'     => $faker->paragraphs(rand(4, 7), true),
    ];
});

$factory->state(Post::class, 'slides', function () {
    return [
        'type' => 'slides',
    ];
});

$factory->state(Post::class, 'place', function () {
    return [
        'type' => 'place',
    ];
});

$factory->state(Post::class, 'exhibition', function () {
    return [
        'type' => 'exhibition',
    ];
});

$factory->state(Post::class, 'pages', function () {
    return [
        'type' => 'pages',
    ];
});
