<?php

use App\Entities\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Post::class, function (Faker $faker) {
    $status = [1, 2];
    return [
        'title'       => $faker->words(rand(3, 4), true),
        'description' => $faker->sentences(rand(3, 4), true),
        'content'     => $faker->paragraphs(rand(4, 7), true),
        'status'      => Arr::random($status),
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
