<?php

namespace App\Supports\Traits;

use App\Entities\Post;
use Illuminate\Support\Str;
use VCComponent\Laravel\MediaManager\Entities\Media;

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
        return factory(Post::class, 10)->states('slides')->create()
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
}
