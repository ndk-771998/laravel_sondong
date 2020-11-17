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
            ['menu_id' => '1', 'label' => 'GIỚI THIỆU', 'link' => '/pages/gioi-thieu', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'SẢN PHẨM', 'link' => '/product', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'dịch vụ', 'link' => '/pages/dich-vu', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'tin tức', 'link' => '/posts', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'liên hệ', 'link' => '/contact', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Váy cưới', 'link' => '/product', 'type' => 'menu-sidebar', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Địa điểm cưới lãng mạng', 'link' => '/place', 'type' => 'menu-sidebar', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Hỗ trợ triển lãm cưới', 'link' => '/exhibition', 'type' => 'menu-sidebar', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Về chúng tôi', 'link' => '/pages/gioi-thieu', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '3', 'label' => 'Điều khoản sử dụng', 'link' => '/pages/dieu-khoan-su-dung', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '4', 'label' => 'Sản xuất', 'link' => '/pages/san-xuat', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '4', 'label' => 'Chính sách riêng tư', 'link' => '/pages/chinh-sach-rieng-tu', 'type' => 'menu-footer', 'parent_id' => 0],
            ['menu_id' => '4', 'label' => 'Hợp tác', 'link' => '/pages/hop-tac', 'type' => 'menu-footer', 'parent_id' => 0],
        ]);
    }
}
