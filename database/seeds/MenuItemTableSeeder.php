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
            ['menu_id' => '1', 'label' => 'Sản phẩm', 'link' => '/product', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Dịch vụ sửa chữa', 'link' => '/repairservice', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Hướng dẫn mua hàng', 'link' => '/policy/huong-dan-mua-hang', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Khuyến mại', 'link' => '/promotion', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Chính sách', 'link' => '/policy', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Liên hệ', 'link' => '/aboutus/lien-he', 'type' => 'menu-header', 'parent_id' => 0],
            
            //seeding sản phẩm's items id(7, 8, 9, 10)
            ['menu_id' => '1', 'label' => 'Laptop/ Máy tính', 'link' => '/categories/laptop', 'type' => 'menu-header', 'parent_id' => 1],
            ['menu_id' => '1', 'label' => 'Máy photocoppy', 'link' => '/categories/may-in', 'type' => 'menu-header', 'parent_id' => 1],
            ['menu_id' => '1', 'label' => 'Link kiện máy tính', 'link' => '/categories/phu-kien', 'type' => 'menu-header', 'parent_id' => 1],
            ['menu_id' => '1', 'label' => 'Mực máy tính', 'link' => '/categories/phu-kien', 'type' => 'menu-header', 'parent_id' => 1],
            
            //seeding laptop/ máy tính item
            ['menu_id' => '1', 'label' => 'Laptop cũ', 'link' => '/categories/laptop-cu', 'type' => 'menu-header', 'parent_id' => 7],//11
                ['menu_id' => '1', 'label' => 'Hp', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 11],
                ['menu_id' => '1', 'label' => 'Dell', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 11],
                ['menu_id' => '1', 'label' => 'Asus', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 11],
                ['menu_id' => '1', 'label' => 'Lenovo', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 11],
                ['menu_id' => '1', 'label' => 'Apple', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 11],
            ['menu_id' => '1', 'label' => 'Laptop mới', 'link' => '/categories/laptop-moi', 'type' => 'menu-header', 'parent_id' => 7],//17
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
            ['menu_id' => '1', 'label' => 'Laptop đồ họa', 'link' => '/categories/laptop-do-hoa', 'type' => 'menu-header', 'parent_id' => 7],//32
                ['menu_id' => '1', 'label' => 'Hp', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 32],
                ['menu_id' => '1', 'label' => 'Dell', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 32],
                ['menu_id' => '1', 'label' => 'Asus', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 32],
                ['menu_id' => '1', 'label' => 'Apple', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 32],
            ['menu_id' => '1', 'label' => 'Laptop mỏng nhẹ', 'link' => '/categories/laptop-mong-nhe', 'type' => 'menu-header', 'parent_id' => 7],//37
                ['menu_id' => '1', 'label' => 'Hp', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 37],
                ['menu_id' => '1', 'label' => 'Dell', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 37],
                ['menu_id' => '1', 'label' => 'Asus', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 37],
                ['menu_id' => '1', 'label' => 'Lenovo', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 37],
            ['menu_id' => '1', 'label' => 'Laptop gaming', 'link' => '/categories/laptop-gaming', 'type' => 'menu-header', 'parent_id' => 7],//42
                ['menu_id' => '1', 'label' => 'Hp', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 42],
                ['menu_id' => '1', 'label' => 'Dell', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 42],
                ['menu_id' => '1', 'label' => 'Asus', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 42],
                ['menu_id' => '1', 'label' => 'Lenovo', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 42],
            ['menu_id' => '1', 'label' => 'Linh kiện', 'link' => '/accessory', 'type' => 'menu-header', 'parent_id' => 7],//47
                ['menu_id' => '1', 'label' => 'Laptop', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 47],
                ['menu_id' => '1', 'label' => 'Máy tính bảng', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 47],
                ['menu_id' => '1', 'label' => 'Máy tính bàn', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 47],
                ['menu_id' => '1', 'label' => 'Phụ kiện, linh kiện', 'link' => '#', 'type' => 'menu-header', 'parent_id' => 47],

            //seeding footer 1
            ['menu_id' => '2', 'label' => 'Giới thiệu', 'link' => '/aboutus', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Khuyến mại', 'link' => '/promotion', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Liên hệ', 'link' => '/aboutus/lien-he', 'type' => 'menu-footer', 'parent_id' => 0],
            
            //seeding footer 2
            ['menu_id' => '3', 'label' => 'Quy định đổi trả hàng', 'link' => '/policy/quy-dinh-doi-tra-hang', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Quy định thanh toán', 'link' => '/policy/quy-dinh-thanh-toan', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Chính sách giao hàng', 'link' => '/policy/chinh-sach-giao-hang', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Hướng dẫn mua hàng', 'link' => '/policy/huong-dan-mua-hang', 'type' => 'menu-footer', 'parent_id' => 0],
        ]);
    }
}
