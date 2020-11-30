<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use VCComponent\Laravel\Config\Services\Facades\Option;

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
        Option::prepare([
            'website-favicon',
            'hotline',
            'header-logo',
            'footer-logo',
            'lien-he-website-title',
            'lien-he-address',
            'trang-chu-speed-slide',
            'footer-logo-facebook-link',
            'footer-logo-twitter-link',
            'footer-logo-instagram-link',
            'footer-logo-facebook',
            'footer-logo-twitter',
            'footer-logo-instagram',
            'footer-copyright-by',
            'footer-operating-license',
        ]);
    }
}
