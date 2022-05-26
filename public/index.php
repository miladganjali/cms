<?php

require_once __DIR__."/../vendor/autoload.php";

use app\controllers\ContactController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function () {
    echo 'Hello world!';
});

$app->router->get('/contact', [ContactController::class, 'contact']);

$app->run();
