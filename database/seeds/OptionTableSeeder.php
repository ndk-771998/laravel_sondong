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
            ['key' => 'social_links', 'value' => '<div><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></div>
                    <div><i class="fa fa-twitter fa-2x ml-4 mr-4" aria-hidden="true"></i></div>
                    <div><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></div>'],
            ['key' => 'copyright', 'value' => '<p>Copyright by Dinks</p>'],
            ['key' => 'logo_footer', 'value' => '/assets/images/logo/logo.png'],


        ]);
    }
}
