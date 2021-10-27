<?php

namespace app\core;

class Router
{
    protected array $routes = [];
    protected Request $request;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function get(string $path, callable $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
       $path = $this->request->getPath();
       $method = $this->request->getMethod();
       $callback = $this->routes[$method][$path] ?? false;

       if ($callback) {
           $callback();
       } else {
           echo 'NOT FOUND';
           exit();
       }
    }
}