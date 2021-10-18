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
                'name' => 'Laptop',
                'slug' => 'laptop',
                'type' => 'products',
            ],
            [
                'name' => 'Máy in',
                'slug' => 'may-in',
                'type' => 'products',
            ],
            [
                'name' => 'Phụ kiện',
                'slug' => 'phu-kien',
                'type' => 'products',
            ],
        ]);
        Category::insert([
            [
                'name' => 'Hãng sản xuất laptop',
                'slug' => 'hang-san-xuat-laptop',
                'type' => 'products',
                'status' => 2,
                'parent_id' => 1,
            ],
        ]);
        Category::insert([
            [
                'name' => 'Hp',
                'slug' => 'hp',
                'type' => 'products',
                'parent_id' => 4,
            ],
            [
                'name' => 'Dell',
                'slug' => 'dell',
                'type' => 'products',
                'parent_id' => 4,
            ],
            [
                'name' => 'Asus',
                'slug' => 'asus',
                'type' => 'products',
                'parent_id' => 4,
            ],
            [
                'name' => 'Lenovo',
                'slug' => 'lenovo',
                'type' => 'products',
                'parent_id' => 4,
            ],
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'type' => 'products',
                'parent_id' => 4,
            ],
            [
                'name' => 'Laptop mới',
                'slug' => 'laptop-moi',
                'type' => 'products',
                'parent_id' => 1,
            ],
            [
                'name' => 'Laptop cũ',
                'slug' => 'laptop-cu',
                'type' => 'products',
                'parent_id' => 1,
            ],
            [
                'name' => 'Laptop đồ họa',
                'slug' => 'laptop-do-hoa',
                'type' => 'products',
                'parent_id' => 1,
            ],
            [
                'name' => 'Laptop gaming',
                'slug' => 'laptop-gaming',
                'type' => 'products',
                'parent_id' => 1,
            ],
            [
                'name' => 'Laptop mỏng nghẹ',
                'slug' => 'laptop-mong-nhe',
                'type' => 'products',
                'parent_id' => 1,
            ],
        ]);
    }
}
