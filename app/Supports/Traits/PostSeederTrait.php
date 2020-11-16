<?php

namespace App\Supports\Traits;

use App\Entities\Post;

trait PostSeederTrait
{
    protected function seederPosts()
    {
        return factory(Post::class, 50)
            ->create([
                'thumbnail' => '/assets/images/news.png',
            ]);
    }

    protected function seederSlides()
    {
        return factory(Post::class, 5)->states('slides')->create();
    }

    protected function seederPlace()
    {
        return factory(Post::class, 10)
            ->states('place')
            ->create()
            ->each(function ($post) {
                $meta = [
                    [
                        'key'   => 'thumbnail',
                        'value' => '/assets/images/news.png',
                    ],
                ];
                $post->postMetas()->createMany($meta);
            });
    }

    protected function seederExhibition()
    {
        return factory(Post::class, 10)->states('exhibition')->create()->each(function ($post) {
            $meta = [
                [
                    'key'   => 'thumbnail',
                    'value' => '/assets/images/news.png',
                ],
            ];
            $post->postMetas()->createMany($meta);
        });
    }

    protected function seederAbout()
    {
        return factory(Post::class)->states('pages')->create([
            'title' => 'Giới thiệu',
        ]);
    }

    protected function seederService()
    {
        return factory(Post::class)->states('pages')->create([
            'title' => 'Dịch vụ',
        ]);
    }
}
