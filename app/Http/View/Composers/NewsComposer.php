<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use VCComponent\Laravel\Post\Entities\Post;

class NewsComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $news_side  = Post::oftype('posts')->OrderBy('id','desc')->where('status','1')->limit(4)->get();
        $view->with('news_side', $news_side);
    }
}
