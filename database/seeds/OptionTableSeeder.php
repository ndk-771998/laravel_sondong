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
            ['label' => 'Header logo','key' => 'header-logo', 'value' => 'http://l72-lp16001-dev.vicoders.com/assets/images/logo/logo.png'],
        ]);
    }
}
