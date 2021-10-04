<?php

use App\Entities\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use VCComponent\Laravel\Category\Entities\Category;
use VCComponent\Laravel\Product\Entities\Variant;
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
        $manufacturers = Category::where('type', 'manufacturer')->get()->pluck('id')->toArray();
        $laptops = Category::where('type', 'laptop')->get()->pluck('id')->toArray();
        factory(Product::class, 50)->create()->each(function ($product) use($manufacturers, $laptops) {
            $product->productMetas()->createMany([
                [
                    'key'   => 'cpu',
                    'value' => 'AMD Ryzen 5-5600H',
                ],
                [
                    'key'   => 'ram',
                    'value' => '8 GB, DDR4, 3200 MHz',
                ],
                [
                    'key'   => 'screen',
                    'value' => '15.6", 1920 x 1080 Pixel, IPS, 144 Hz',
                ],
                [
                    'key'   => 'graphics',
                    'value' => 'AMD Radeon RX 5500M 4 GB',
                ],
                [
                    'key'   => 'hard_drive',
                    'value' => 'SSD 512 GB',
                ],
                [
                    'key'   => 'os',
                    'value' => 'Window 10s',
                ],
                [
                    'key'   => 'weight',
                    'value' => '2.35',
                ],
                [
                    'key'   => 'size',
                    'value' => '359 x 254 x 24.9',
                ],
                [
                    'key'   => 'origin',
                    'value' => 'Trung Quốc',
                ],
            ]);
            $product->attachCategories(Arr::random($manufacturers));
            $product->attachCategories(Arr::random($laptops));
        });
        factory(Product::class, 10)->state('printer')->create();
        factory(Product::class, 10)->state('accessory')->create();
    }
}
