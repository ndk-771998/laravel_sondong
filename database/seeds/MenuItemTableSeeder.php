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
            ['menu_id' => '1', 'label' => 'GIỚI THIỆU', 'link' => '/abouts', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'SẢN PHẨM', 'link' => '/products', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'dịch vụ', 'link' => '/services', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'tin tức', 'link' => '/news', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'liên hệ', 'link' => '/contacts', 'type' => 'menu-header', 'parent_id' => 0],
        ]);
    }
}
