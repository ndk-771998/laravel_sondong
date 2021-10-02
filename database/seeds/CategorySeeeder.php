<?php
use Illuminate\Database\Seeder;
use VCComponent\Laravel\Category\Entities\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Hp',
                'slug' => 'hp',
                'type' => 'manufacturer',
            ],
            [
                'name' => 'Dell',
                'slug' => 'dell',
                'type' => 'manufacturer',
            ],
            [
                'name' => 'Asus',
                'slug' => 'asus',
                'type' => 'manufacturer',
            ],
            [
                'name' => 'Lenovo',
                'slug' => 'lenovo',
                'type' => 'manufacturer',
            ],
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'type' => 'manufacturer',
            ],
            [
                'name' => 'Laptop mới',
                'slug' => 'laptop-moi',
                'type' => 'laptop',
            ],
            [
                'name' => 'Laptop cũ',
                'slug' => 'laptop-cu',
                'type' => 'laptop',
            ],
            [
                'name' => 'Laptop đồ họa',
                'slug' => 'laptop-do-hoa',
                'type' => 'laptop',
            ],
            [
                'name' => 'Laptop gaming',
                'slug' => 'laptop gaming',
                'type' => 'laptop',
            ],
            [
                'name' => 'Laptop mỏng nghẹ',
                'slug' => 'laptop-mong-nhe',
                'type' => 'laptop',
            ],
        ]);
    }
}
