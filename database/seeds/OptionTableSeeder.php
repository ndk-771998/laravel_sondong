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
