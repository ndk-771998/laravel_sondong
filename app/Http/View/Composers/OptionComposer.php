<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class OptionComposer
{

    public function compose(View $view)
    {
        prepareOption(
            [
                'header-logo',
            ]
        );
    }
}
