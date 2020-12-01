<?php

namespace App\Entities;

use Illuminate\Support\Facades\Cache;
use VCComponent\Laravel\Menu\Entities\Menu as BaseMenu;

class Menu extends BaseMenu
{
    public static function getMenu($position)
    {
        $cache_name = 'menu ' . $position;
        $time_cache = 60;
        if (Cache::has($cache_name)) {
            return Cache::get($cache_name);
        }
        return Cache::remember($cache_name, $time_cache, function () use ($position) {
            return Menu::select('id')->where('name', $position)->with('menuItems')->first();
        });
    }
}
