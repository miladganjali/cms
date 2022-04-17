<?php

namespace app\core;

use Couchbase\View;

class Router
{
    public array $routes = [];
    protected Request $request;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function get(string $path, callable|string $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback) {
            if(is_string($callback)) {
                echo $this->render($callback);
            } else {
                $callback();
            }
        } else {
            Application::$app->response->setStatuesCode(404);
            echo '<h1>NOT FOUND!</h1>';
            exit();
        }
    }

    protected function render(string $view): array|bool|string
    {
        $templateContent = Views::render('/views/layouts/main.php');
        $viewContent = Views::render("/views/$view.php");

        return str_replace('{{content}}', $viewContent, $templateContent);
    }


}