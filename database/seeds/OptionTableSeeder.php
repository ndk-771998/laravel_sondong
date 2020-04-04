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
                'key'  => 'social_links',
                'value' => '<div><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></div>
                            <div><i class="fa fa-twitter fa-2x ml-4 mr-4" aria-hidden="true"></i></div>
                            <div><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></div>',
            ],
            ['key' => 'copyright', 'value' => '<p>Copyright by Dinks</p>'],
            ['key' => 'logo_footer', 'value' => '/assets/images/logo/logo.png'],
            ['key' => 'giấy phép hoạt động', 'value' => 'Giấy phép hoạt động trang thông tin điện tử tổng hợp số 36/GP-ICP-STTTT, HCM ngày 29/08/2016'],
            [
                'key' => 'hotline',
                'value' => '<p>Bộ phận kỹ thuật</p>
                            <h5>+ 84 868 21 08 62</h5>
                            <p>Bộ phận CSKH</p>
                            <h5>+ 84 868 21 08 62</h5>'
            ],
            ['key' => 'slide_time_interval', 'value' => '6'],
        ]);
    }
}
