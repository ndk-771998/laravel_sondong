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
        $this->call(UsersTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MenuItemTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(OrderStatusesTableSeeder::class);
        $this->call(PaymentStatusesTableSeeder::class);

    }
}
