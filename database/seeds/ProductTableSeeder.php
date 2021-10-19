<?php

use App\Entities\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use VCComponent\Laravel\Category\Entities\Category;
use VCComponent\Laravel\Product\Entities\ProductSchema;
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
        ProductSchema::insert([
            ['name' => 'cpu', 'Label' => 'CPU', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'product_type' => 'products'],
            ['name' => 'ram', 'Label' => 'Ram', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'product_type' => 'products'],
            ['name' => 'screen', 'Label' => 'Màn hình', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'product_type' => 'products'],
            ['name' => 'graphics', 'Label' => 'Đồ họa', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'product_type' => 'products'],
            ['name' => 'driver', 'Label' => 'Ổ cứng', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'product_type' => 'products'],
            ['name' => 'os', 'Label' => 'Hệ điều hành', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'product_type' => 'products'],
            ['name' => 'weight', 'Label' => 'Trọng lượng', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'product_type' => 'products'],
            ['name' => 'size', 'Label' => 'Kích thước', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'product_type' => 'products'],
            ['name' => 'origin', 'Label' => 'Xuất xứ', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'product_type' => 'products'],
            ['name' => 'guarantee', 'Label' => 'Bảo hành', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'product_type' => 'products'],
        ]);


        $manufacturers = Category::whereIn('slug', ['hp', 'dell', 'asus', 'lenovo', 'apple'])->get()->pluck('id')->toArray();
        $laptops = Category::whereIn('slug', ['laptop-moi', 'laptop-cu', 'laptop-do-hoa', 'laptop-mong-nhe', 'laptop-gaming'])->get()->pluck('id')->toArray();
        $laptop_id = Category::where('slug', 'laptop')->first()->id;
        $flash_sale_id = Category::where('slug', 'flash-sale')->first()->id;
        factory(Product::class, 50)->create()->each(function ($product) use ($manufacturers, $laptops, $laptop_id, $flash_sale_id) {
            $product->attachCategories([$flash_sale_id]);
            $product->attachCategories([$laptop_id]);
            $product->productMetas()->createMany([
                [
                    'key'   => 'guarantee',
                    'value' => '24',
                ],
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
        $printer_category_id = Category::where('slug', 'may-in')->first()->id;
        factory(Product::class, 10)->create()->each(function ($product) use ($printer_category_id) {
            $product->attachCategories($printer_category_id);
        });
        $accessory_category_id = Category::where('slug', 'phu-kien')->first()->id;
        factory(Product::class, 10)->create()->each(function ($product) use ($accessory_category_id) {
            $product->attachCategories($accessory_category_id);
        });;
    }
}
