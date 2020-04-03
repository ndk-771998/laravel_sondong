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
            ['menu_id' => '1', 'label' => 'tin tức', 'link' => '/news', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'liên hệ', 'link' => '/contact', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Bàn trang điểm', 'link' => '/', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Váy cưới', 'link' => '/product', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Báo giá chụp ảnh', 'link' => '/', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Wedding paner', 'link' => '/', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Địa điểm cưới lãng mạng', 'link' => '/', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '2', 'label' => 'Hỗ trợ triển lãm cưới', 'link' => '/', 'type' => 'menu-header', 'parent_id' => 0],
        ]);
    }
}
