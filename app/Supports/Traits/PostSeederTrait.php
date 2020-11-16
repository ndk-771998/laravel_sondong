<?php

namespace App\Supports\Traits;

use App\Entities\Post;
use Illuminate\Support\Str;

trait PostSeederTrait {
    protected function seederPosts()
    {
        return factory(Post::class, 50)
            ->create([
                'thumbnail' => '/assets/images/news.png'
            ]);
    }


    protected function seederSlides()
    {
        return factory(Post::class, 5)->states('slides')->create();
    }

    protected function seederPlace()
    {
        return factory(Post::class, 10)->states('place')->create();
    }

    protected function seederExhibition()
    {
        return factory(Post::class, 10)->states('exhibition')->create();
    }

    protected function seederAbout()
    {
        return factory(Post::class)->states('pages')->create([
            'title' => 'about',
        ]);
    }

    protected function seederService()
    {
        return factory(Post::class)->states('pages')->create([
            'title' => 'service',
        ]);
    }
}
