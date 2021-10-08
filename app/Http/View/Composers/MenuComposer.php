<?php

namespace App\Http\View\Composers;

use App\Entities\Menu;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menus_header = Menu::getMenu('header');
        $footer_1     = Menu::getMenu('footer-1');
        $footer_2     = Menu::getMenu('footer-2');
        $view->with([
            'menus_header' => $menus_header,
            'footer_1'     => $footer_1,
            'footer_2'     => $footer_2,
        ]);
    }
}
