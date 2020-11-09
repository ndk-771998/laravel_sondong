<?php

use Illuminate\Database\Seeder;
use VCComponent\Laravel\Config\Entities\Option;

class OptionTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Option::insert([
            [
                'label'   => 'trang chủ slide 1',
                'key'  => 'trang-chu-slide-1',
                'value' => '/assets/images/wallpaper.png',
            ],
            [
                'label'   => 'trang chủ slide 2',
                'key'  => 'trang-chu-slide-2',
                'value' => '/assets/images/wallpaper.png',
            ],
            [
                'label'   => 'trang chủ slide 3',
                'key'  => 'trang-chu-slide-3',
                'value' => '/assets/images/wallpaper.png',
            ],
            [
                'label'   => 'trang chủ slide 4',
                'key'  => 'trang-chu-slide-4',
                'value' => '/assets/images/wallpaper.png',
            ],
            [
                'label'   => 'trang chủ slide 5',
                'key'  => 'trang-chu-slide-5',
                'value' => '/assets/images/wallpaper.png',
            ],
        ]);
    }
}
