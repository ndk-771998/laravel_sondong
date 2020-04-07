<?php

use Illuminate\Database\Seeder;
use VCComponent\Laravel\Product\Entities\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 100)->create()->each(function ($image) {
                $meta = [
                    [
                        'key'   => 'thumbnail',
                        'value' => '/assets/images/products/product_1.png',
                    ],
                ];
                $image->productMetas()->createMany($meta);
            });;
    }
}
