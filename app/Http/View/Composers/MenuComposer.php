<?php

namespace App\Http\View\Composers;

use VCComponent\Laravel\Menu\Entities\ItemMenu;
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
        $menus_header = ItemMenu::where('menu_id',1)->get();

        $view->with('menus_header', $menus_header);
    }
}
