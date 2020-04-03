<?php

namespace App\Supports\Traits;

use App\Entities\Post;
use Illuminate\Support\Str;
use VCComponent\Laravel\MediaManager\Entities\Media;

trait PostSeederTrait {
    // protected function seederPosts()
    // {
    //     return factory(Post::class, 50)
    //         ->create()
    //         ->each(function ($image) {
    //             $meta = [
    //                 [
    //                     'key'   => 'thumbnail',
    //                     'value' => 'http://kit-html-p1005-dev.vicoders.com/assets/images/rem.png',
    //                 ],
    //             ];
    //             $image->postMetas()->createMany($meta);
    //         });
    // }

    // protected function seederPages()
    // {
    //     return factory(Post::class)->states('pages')->create();
    // }

    // protected function seederConstructions()
    // {
    //     return factory(Post::class, 30)->states('constructions')
    //         ->create()
    //         ->each(function ($image) {
    //             $meta = [
    //                 [
    //                     'key'   => 'thumbnail',
    //                     'value' => 'http://kit-html-p1005-dev.vicoders.com/assets/images/rem.png',
    //                 ],
    //             ];
    //             $image->postMetas()->createMany($meta);
    //         });
    // }

    protected function seederSlides() {
        dd(factory(Post::class, 10)->states('slides')->create());
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
