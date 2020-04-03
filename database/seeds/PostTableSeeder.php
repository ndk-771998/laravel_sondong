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
       $this->seederPosts();
        $this->seederPages();
        $this->seederConstructions();
        $this->seederSlides();
    }
}
