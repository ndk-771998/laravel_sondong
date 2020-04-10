<?php

use Illuminate\Database\Seeder;
use VCComponent\Laravel\Product\Entities\Product;
use VCComponent\Laravel\Product\Entities\ProductMeta;
use VCComponent\Laravel\Product\Traits\ProductSchemaTrait;

class ProductTableSeeder extends Seeder {
    use ProductSchemaTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(Product::class, 100)->create()->each(function ($image) {
            $image->productMetas()->saveMany([
                new ProductMeta([
                    'key'   => 'thumbnail',
                    'value' => '/assets/images/products/product_1.png',
                ]),
                new ProductMeta([
                    'key'   => 'thumbnail',
                    'value' => '/assets/images/products/product_3.png',
                ]),
                new ProductMeta([
                    'key'   => 'thumbnail',
                    'value' => '/assets/images/products/product_5.png',
                ]),
                new ProductMeta([
                    'key'   => 'thumbnail',
                    'value' => '/assets/images/products/product_7.png',
                ]),

            ]);
        });
    }
}
