<?php

use App\Entities\Post;
use App\Supports\Traits\PostSeederTrait;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder {
    use PostSeederTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seederPosts();
        $this->seederSlides();
        $this->seederPlace();
        $this->seederExhibition();
        $this->seederAbout();
        $this->seederService();
        $this->seederTermsOfUse();
        $this->seederManufacturing();
        $this->seederPolicy();
        $this->seederCooperate();
    }
}
