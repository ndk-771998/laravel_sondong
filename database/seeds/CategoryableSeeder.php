<?php

use App\Entities\Category;
use App\Entities\Post;
use Illuminate\Database\Seeder;

class CategoryableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::ofType('posts')->get();
        $categories = Category::ofType('posts')->pluck('id')->toArray();

        foreach ($posts as $post) {
            $post->attachCategories([$categories[array_rand($categories)], $categories[array_rand($categories)]]);
        }
    }
}
