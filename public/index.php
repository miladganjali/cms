<?php

require_once __DIR__."/../vendor/autoload.php";

use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function () {
    echo 'Hello world!';
});

$app->router->get('/contact', 'contact');

$app->run();
