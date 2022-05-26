<?php

namespace app\core;

class Views
{
    public static function render($view, array $params = []): bool|string
    {
        $bags = [];
        foreach ($params as $key => $value ) {
            $bag[$key] = $value;
        }

        ob_start();
        include_once Application::$rootPath . $view;
        return ob_get_clean();
    }

    public static function view(string $view, array $params = []): bool|string
    {
        $templateContent = Views::render('/views/layouts/main.php');
        $viewContent = Views::render("/views/$view.php", $params);

        return str_replace('{{content}}', $viewContent, $templateContent);
    }
}