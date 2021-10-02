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
        $this->call(CategorySeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MenuItemTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(PaymentStatusesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(MediaDimentionSeeder::class);
        $this->call(AnalyticsQuerySeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(OrderItemsSeeder::class);
    }
}
