<?php

use Illuminate\Database\Seeder;
use App\Entities\Post;
use App\Supports\Traits\PostSeederTrait;

class PostTableSeeder extends Seeder
{
    use PostSeederTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dd($this->seederSlides());
        $this->seederSlides();
    }
}
