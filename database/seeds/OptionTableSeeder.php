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
                'label'   => 'footer logo facebook',
                'key'  => 'footer-logo-facebook',
                'value' => 'https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/f3ccce7b-9476-4682-9dd5-756c4082dd4c.svg',
            ],
            [
                'label'   => 'footer logo twitter',
                'key'  => 'footer-logo-twitter',
                'value' => 'https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/fe7c3857-6de3-44a9-a28c-c8ce3f8bb4ba.svg',
            ],
            [
                'label'   => 'footer logo instagram',
                'key'  => 'footer-logo-instagram',
                'value' => 'https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/bc749d9d-e72d-48d2-b3ef-e3ddf97a1bd4.svg',
            ],
            [
                'label'   => 'footer copyright by',
                'key'  => 'footer-copyright-by',
                'value' => 'Copyright by Dinks',
            ],
            [
                'label'   => 'footer operating license',
                'key'  => 'footer-operating-license',
                'value' => 'Giấy phép hoạt động trang thông tin điện tử tổng hợp số 36/GP-ICP-STTTT, HCM ngày 29/08/2016',
            ],
                'label' => 'Footer logo',
                'key'   => 'footer-logo',
                'value' => 'https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/fafaeae0-c771-45b6-afa3-5a6439992b21.png',
            ],
            [
                'label' => 'Header logo',
                'key'   => 'header-logo',
                'value' => 'http://l72-lp16001-dev.vicoders.com/assets/images/logo/logo.png'],
        ]);
    }
}
