<?php

namespace app\controllers;

use app\core\Views;

class ContactController
{
    public static function contact() : string
    {
        return Views::view('contact');
    }
}