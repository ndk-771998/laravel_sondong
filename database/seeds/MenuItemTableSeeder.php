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
            ['menu_id' => '1', 'label' => 'TRANG CHỦ', 'link' => '/', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'GIỚI THIỆU', 'link' => '/about', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'SẢN PHẨM', 'link' => '/product', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'dịch vụ', 'link' => '/service', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'tin tức', 'link' => '/posts', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'liên hệ', 'link' => '/contact', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Váy cưới', 'link' => '/product', 'type' => 'menu-sidebar', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Địa điểm cưới lãng mạng', 'link' => '/place', 'type' => 'menu-sidebar', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Hỗ trợ triển lãm cưới', 'link' => '/exhibition', 'type' => 'menu-sidebar', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Về chúng tôi', 'link' => '/about', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Điều khoản sử dụng', 'link' => '/', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '4', 'label' => 'Sản xuất', 'link' => '/', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '4', 'label' => 'Chính sách riêng tư', 'link' => '/', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '4', 'label' => 'Hợp tác', 'link' => '/', 'type' => 'menu-footer', 'parent_id' => 0],
        ]);
    }
}
