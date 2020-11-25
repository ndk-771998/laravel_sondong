<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use VCComponent\Laravel\Product\Entities\Product;
use VCComponent\Laravel\Product\Traits\ProductSchemaTrait;

class ProductTableSeeder extends Seeder
{
    use ProductSchemaTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 100)->create()->each(function ($brand_name) {
            $brand = ['Gucci', 'Louis', 'Vuiton', 'Supreme', 'Champion', 'Se7en', 'Yody'];
            $brand_name->productMetas()->createMany([
                [
                    'key'   => 'brand_name',
                    'value' => Arr::random($brand),
                ],
            ]);
        });
    }
}
