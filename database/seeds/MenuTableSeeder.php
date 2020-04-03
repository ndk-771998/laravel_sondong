<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use VCComponent\Laravel\Menu\Entities\Menu;

class MenuTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([
            ['name' => 'header'],
            ['name' => 'sidebar'],
            ]);
    }
}
