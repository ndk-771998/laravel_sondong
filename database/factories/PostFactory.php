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
        'thumbnail'         => $faker->randomElement([
            '/assets/images/products/printer-1.png',
            '/assets/images/products/printer-2.png',
            '/assets/images/products/printer-3.png',
            '/assets/images/products/printer-4.png',
            '/assets/images/products/printer-5.png',
            '/assets/images/products/laptop-1.png',
            '/assets/images/products/laptop-2.png',
            '/assets/images/products/laptop-3.png',
            '/assets/images/products/laptop-4.png',
            '/assets/images/products/laptop-5.png',
            '/assets/images/products/laptop-6.png',
            '/assets/images/products/laptop-7.png',
            '/assets/images/products/laptop-8.png',
        ]),
    ];
});

$factory->state(Post::class, 'customermedias', function () {
    return [
        'type' => 'customermedias',
    ];
});
