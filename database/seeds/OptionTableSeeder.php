<?php

use Illuminate\Database\Seeder;
use VCComponent\Laravel\Config\Entities\Option;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Option::insert([
            [
                'label' => 'Header Logo',
                'key' => 'header-logo',
                'value' => '/assets/images/logo/logo.png',
            ],
            [
                'label' => "Social Links",
                'key'   => 'social_links',
                'value' => '<div><i class="fa fa-facebook-square fa-2x"></i></div>
                            <div><i class="fa fa-twitter fa-2x ml-4 mr-4"></i></div>
                            <div><i class="fa fa-instagram fa-2x"></i></div>',
            ],
            [
                'label' => "Copyright",
                'key'   => 'copyright',
                'value' => '<p>Copyright by Dinks</p>',
            ],
            [
                'label' => "logo footer",
                'key'   => 'logo_footer',
                'value' => '/assets/images/logo/logo.png',
            ],
            [
                "label" => "Giấy phép hoạt động",
                'key'   => 'giay-phep-hoat-dong',
                'value' => 'Giấy phép hoạt động trang thông tin điện tử tổng hợp số 36/GP-ICP-STTTT, HCM ngày 29/08/2016',
            ],
            [
                'label' => ' Hotline',
                'key'   => 'hotline',
                'value' => '<p>Bộ phận kỹ thuật</p>
                            <h5>+ 84 868 21 08 62</h5>
                            <p>Bộ phận CSKH</p>
                            <h5>+ 84 868 21 08 62</h5>',
            ],
        ]);
    }
}
