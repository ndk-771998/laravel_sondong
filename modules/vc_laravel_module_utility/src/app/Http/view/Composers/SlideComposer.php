<?php

namespace VCComponent\Laravel\Utility\Http\View\Composers;

use Illuminate\View\View;
use VCComponent\Laravel\Post\Entities\Post;

class SlideComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $slides = Post::oftype('slides')->where('status',1)->latest()->paginate(4);
        $view->with('slides', $slides);
    }
}
