<?php

namespace app\core;

class Application
{

    public Router $router;
    public Request $request;
    public Response $response;

    public static string $rootPath;

    public static Application $app;

    /**
     *
     */
    public function __construct(string $rootPath)
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
        $this->response = new Response();
        self::$rootPath = $rootPath;
        self::$app = $this;
    }

    public function run()
    {
        $this->router->resolve();
    }
}