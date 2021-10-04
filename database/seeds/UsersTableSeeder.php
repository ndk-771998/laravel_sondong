<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Entities\User;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email'        => 'admin@vicoders.com',
                'username'     => Str::random(5),
                'password'     => Hash::make('secret'),
                'verify_token' => Hash::make('admin@vicoders.com'),
            ],
            [
                'email'        => 'huybq@vicoders.com',
                'username'     => Str::random(5),
                'password'     => Hash::make('secret'),
                'verify_token' => Hash::make('huybq@vicoders.com'),
            ],
            [
                'email'        => 'vicoders@vicoders.com',
                'username'     => Str::random(5),
                'password'     => Hash::make('secret'),
                'verify_token' => Hash::make('vicoders@vicoders.com'),
            ],
        ]);
        DB::table('roles')->insert([
            ["name" => "Superadmin","slug" => "superadmin","description" => "","status" => "0","level" => "1"],
        ]);
        DB::table('role_user')->insert([
            ["role_id" => 1,"user_id" => 1],
        ]);

    }

}
