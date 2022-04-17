<?php

namespace app\core;

class Views
{
    public static function render($view): bool|string
    {
        ob_start();
        include_once Application::$rootPath . $view;
        return ob_get_clean();
    }
}