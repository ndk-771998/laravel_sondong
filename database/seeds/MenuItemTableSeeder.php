<?php

use Illuminate\Database\Seeder;
use VCComponent\Laravel\Menu\Entities\ItemMenu;

class MenuItemTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        ItemMenu::insert([
            //seeing header menu items
            ['menu_id' => '1', 'label' => 'Sản phẩm', 'link' => '', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Dịch vụ sửa chữa', 'link' => '/pages/gioi-thieu', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Hướng dẫn mua hàng', 'link' => '/product', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Khuyến mại', 'link' => '/pages/dich-vu', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Chính sách', 'link' => '/posts', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Liên hệ', 'link' => '/contact', 'type' => 'menu-header', 'parent_id' => 0],
            
            //seeding sản phẩm's items id(7, 8, 9, 10)
            ['menu_id' => '1', 'label' => 'Laptop/ Máy tính', 'link' => '', 'type' => 'menu-header', 'parent_id' => 1],
            ['menu_id' => '1', 'label' => 'Máy photocoppy', 'link' => '', 'type' => 'menu-header', 'parent_id' => 1],
            ['menu_id' => '1', 'label' => 'Link kiện máy tính', 'link' => '', 'type' => 'menu-header', 'parent_id' => 1],
            ['menu_id' => '1', 'label' => 'Mực máy tính', 'link' => '', 'type' => 'menu-header', 'parent_id' => 1],
            
            //seeding laptop/ máy tính item
            ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 7],//11
                ['menu_id' => '1', 'label' => 'Hp', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 11],
                ['menu_id' => '1', 'label' => 'Dell', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 11],
                ['menu_id' => '1', 'label' => 'Asus', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 11],
                ['menu_id' => '1', 'label' => 'Lenovo', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 11],
                ['menu_id' => '1', 'label' => 'Apple', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 11],
            ['menu_id' => '1', 'label' => 'Laptop mới', 'link' => '', 'type' => 'menu-header', 'parent_id' => 7],//17
                ['menu_id' => '1', 'label' => 'Laptop', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 17],
                ['menu_id' => '1', 'label' => 'Máy tính bảng', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 17],
                ['menu_id' => '1', 'label' => 'Máy tính bàn', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 17],
                ['menu_id' => '1', 'label' => 'Phụ kiện, linh kiện', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 17],
            ['menu_id' => '1', 'label' => 'Pc đồng bộ cũ', 'link' => '', 'type' => 'menu-header', 'parent_id' => 7],//22
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 22],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 22],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 22],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 22],
            ['menu_id' => '1', 'label' => 'Pc mới/ Pc lắp rap', 'link' => '', 'type' => 'menu-header', 'parent_id' => 7],//27
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 27],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 27],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 27],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 27],
            ['menu_id' => '1', 'label' => 'Laptop đồ họa', 'link' => '', 'type' => 'menu-header', 'parent_id' => 7],//32
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 32],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 32],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 32],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 32],
            ['menu_id' => '1', 'label' => 'Laptop mỏng nhẹ', 'link' => '', 'type' => 'menu-header', 'parent_id' => 7],//37
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 37],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 37],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 37],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 37],
            ['menu_id' => '1', 'label' => 'Laptop gaming', 'link' => '', 'type' => 'menu-header', 'parent_id' => 7],//42
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 42],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 42],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 42],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 42],
            ['menu_id' => '1', 'label' => 'Linh kiện', 'link' => '', 'type' => 'menu-header', 'parent_id' => 7],//47
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 47],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 47],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 47],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 47],
                ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 47],

            //seeding footer 1
            ['menu_id' => '2', 'label' => 'Giới thiệu', 'link' => '/pages/gioi-thieu', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Khuyến mại', 'link' => '/pages/dieu-khoan-su-dung', 'type' => 'menu-footer', 'parent_id' => 0],
            
            //seeding footer 2
            ['menu_id' => '3', 'label' => 'Liên hệ', 'link' => '/pages/san-xuat', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Chính sách riêng tư', 'link' => '/pages/chinh-sach-rieng-tu', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Hợp tác', 'link' => '/pages/hop-tac', 'type' => 'menu-footer', 'parent_id' => 0],
        ]);
    }
}
