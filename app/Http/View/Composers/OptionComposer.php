<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class OptionComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */

    public function compose(View $view)
    {
         prepareOption([
             'trang-chu-title',
             'bo-phan-ki-thuat',
             'slide-1',
             'slide-2',
             'slide-3',
             'slide-4',
             'slide-5',
         ]);
    }
}
