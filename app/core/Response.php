<?php

namespace app\core;

class Response
{
    public function __construct()
    {

    }

    public function setStatuesCode(int $code = 200)
    {
        http_response_code($code);
    }
}