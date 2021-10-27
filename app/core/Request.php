<?php

namespace app\core;

class Request
{
    public function getPath() : string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $questionPosition = strpos($path, '?');
        if ($questionPosition === false) {
            return $path;
        }

        return substr($path, 0, $questionPosition);
    }

    public function getMethod() : string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}