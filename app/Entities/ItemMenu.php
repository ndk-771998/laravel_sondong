<?php

namespace App\Entities;

use VCComponent\Laravel\Menu\Entities\ItemMenu as EntitiesItemMenu;

class ItemMenu extends EntitiesItemMenu {

    public function subMenus()
    {
        return $this->hasMany(ItemMenu::class, 'parent_id')->orderBy('order_by', 'ASC')->with('subMenus:label,link,id,parent_id');
    }
}