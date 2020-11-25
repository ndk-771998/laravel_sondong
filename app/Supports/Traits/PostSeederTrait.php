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
            ->create([
                'thumbnail' => '/assets/images/news.png',
            ]);
    }

    protected function seederExhibition()
    {
        return factory(Post::class, 10)->states('exhibition')  ->create([
            'thumbnail' => '/assets/images/news.png',
        ]);
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
    protected function seederTermsOfUse()
    {
        return factory(Post::class)->states('pages')->create([
            'title' => 'Điều khoản sử dụng',
        ]);
    }
    protected function seederManufacturing()
    {
        return factory(Post::class)->states('pages')->create([
            'title' => 'Sản xuất',
        ]);
    }
    protected function seederPolicy()
    {
        return factory(Post::class)->states('pages')->create([
            'title' => 'Chính sách riêng tư',
        ]);
    }
    protected function seederCooperate()
    {
        return factory(Post::class)->states('pages')->create([
            'title' => 'Hợp tác',
        ]);
    }
}