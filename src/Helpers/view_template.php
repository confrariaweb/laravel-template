<?php

use Illuminate\Support\Str;

if (!function_exists('viewTemplate')) {
    function viewTemplate($view, $views = NULL)
    {
        return 'templateAdminDefault::' . Str::plural($views) . '.' . $view;
        /* Busca no proprio pacote a view */
        if (isset($views)) {
            return $views . '::' . $view;
        }
        return $view;
    }
}
