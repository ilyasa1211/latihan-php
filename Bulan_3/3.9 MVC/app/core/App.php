<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $param = [];
    public function __construct()
    {
        $url = $this->parseUrl();

        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        if (isset ($url[1]) and method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        call_user_func_array([$this->controller, $this->method], $this->param);
    }

    public function parseUrl()
    {
        if (isset ($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return $url = explode('/', $url);
        }
        return $this->controller;
    }
}
