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
            'sidebar-right-hotline',
            'header-logo',
            'footer-logo',
            'footer-logo-facebook-link',
            'footer-logo-facebook',
            'footer-logo-twitter-link',
            'footer-logo-twitter',
            'footer-logo-instagram-link',
            'footer-logo-instagram',
            'footer-copyright-by',
            'footer-operating-license',
        ]);
    }
}
