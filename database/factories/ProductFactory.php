<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use VCComponent\Laravel\Product\Entities\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'           => $faker->words(rand(4, 5), true),
        'description'    => $faker->sentences(rand(4, 7), true),
        'quantity'       => rand(0, 20),
        'code'           => $faker->swiftBicNumber,
        'price'          => rand(500000, 2000000),
        'original_price' => 2000000,
        'author_id'      => rand(1, 3),
        'thumbnail'      => $faker->randomElement([
            '/assets/images/products/product_1.png',
            '/assets/images/products/product_2.png',
            '/assets/images/products/product_3.png',
            '/assets/images/products/product_4.png',
            '/assets/images/products/product_5.png',
            '/assets/images/products/product_6.png',
            '/assets/images/products/product_7.png',
            '/assets/images/products/product_8.png',
            '/assets/images/products/product_9.png',
        ]),
        'brand'          => $faker->randomElement([
            'địa điểm cưới lãng mạng',
            'hỗ trợ triển lãm cưới',
            'váy cưới',
        ]),
        'sku'            => Str::random(32),
    ];
});

$factory->state(Product::class, 'hot', function () {
    return [
        'is_hot' => Product::HOT,
    ];
});
