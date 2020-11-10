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
                'label'   => 'Sidebar Right Hotline',
                'key'  => 'sidebar-right-hotline',
                'value' => '<p>Bộ phận kỹ thuật</p>
                            <h5>+ 84 868 21 08 62</h5>
                            <p>Bộ phận CSKH</p>
                            <h5>+ 84 868 21 08 62</h5>',
            ],
        ]);
    }
}
