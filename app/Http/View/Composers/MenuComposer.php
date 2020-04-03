<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use VCComponent\Laravel\Menu\Entities\ItemMenu;

class MenuComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
        $menus_header = ItemMenu::where('menu_id', 1)->get();
        $sides_bar    = ItemMenu::where('menu_id', 2)->get();
        $footer_1     = ItemMenu::where('menu_id', 3)->get();
        $footer_2     = ItemMenu::where('menu_id', 4)->get();
        $view->with([
            'menus_header' => $menus_header,
            'sides_bar'    => $sides_bar,
            'footer_1'     => $footer_1,
            'footer_2'     => $footer_2,
        ]);
    }
}
