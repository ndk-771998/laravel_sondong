<?php

use App\Entities\ItemMenu;
use App\Entities\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'name' => 'header',
            'position' => 'position-1',
            'page' => 'header',
        ]);

        ItemMenu::insert([
            ['menu_id' => '1', 'label' => 'Giới thiệu', 'link' => '/pages/gioi-thieu', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Tin chính trị', 'link' => '/categories/tin-chinh-tri', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Kinh tế', 'link' => '/categories/kinh-te', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Quốc phòng và an ninh', 'link' => '/categories/quoc-phong-va-an-ninh', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Pháp luật', 'link' => '/categories/phap-luat', 'type' => 'menu-header', 'parent_id' => 0],
            ['menu_id' => '1', 'label' => 'Sức khỏe', 'link' => '/categories/suc-khoe', 'type' => 'menu-header', 'parent_id' => 0],
        ]);
    }
}