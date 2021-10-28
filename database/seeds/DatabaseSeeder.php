<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(MediaDimentionSeeder::class);
        $this->call(AnalyticsQuerySeeder::class);
    }
}
