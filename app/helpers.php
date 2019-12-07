<?php

if (! function_exists('page_title')) {
    function page_title($title){
        $defTit = ' Laracarte-List of artisan';
        if ($title === '') {
            return $defTit;
        }else {
            return $title. ' |' . $defTit;
        }
    }
}

if (! function_exists('set_active_route')) {
    function set_active_route($route){
      return Route::is($route) ? 'active' : '';
    }
}
