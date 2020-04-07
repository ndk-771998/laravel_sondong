<?php

namespace App\Supports\Traits;

use App\Entities\Post;
use Illuminate\Support\Str;

trait PostSeederTrait {
    protected function seederPosts()
    {
        return factory(Post::class, 50)
            ->create()
            ->each(function ($image) {
                $meta = [
                    [
                        'key'   => 'thumbnail',
                        'value' => '/assets/images/news.png',
                    ],
                ];
                $image->postMetas()->createMany($meta);
            });
    }


    protected function seederSlides()
    {
        return factory(Post::class, 5)->states('slides')->create()
            ->each(function ($image) {
                $meta = [
                    [
                        'key'   => 'thumbnail',
                        'value' => '/assets/images/wallpaper.png',
                    ],
                ];
                $image->postMetas()->createMany($meta);
            });
    }

    protected function seederPlace()
    {
        return factory(Post::class, 10)->states('place')->create()
            ->each(function ($image) {
                $meta = [
                    [
                        'key'   => 'thumbnail',
                        'value' => '/assets/images/news.png',
                    ],
                ];
                $image->postMetas()->createMany($meta);
            });
    }

    protected function seederExhibition()
    {
        return factory(Post::class, 10)->states('exhibition')->create()
            ->each(function ($image) {
                $meta = [
                    [
                        'key'   => 'thumbnail',
                        'value' => '/assets/images/news.png',
                    ],
                ];
                $image->postMetas()->createMany($meta);
            });
    }
}
