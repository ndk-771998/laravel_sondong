<?php

use VCComponent\Laravel\Script\Entities\Script;

if (!function_exists('get_Script')) {
    function get_Script($position)
    {
        return Script::get_Script($position);
    }
}
