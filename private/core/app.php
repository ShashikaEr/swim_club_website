<?php

class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $parameters = array();


    public function __construct()
    {
        $URL = $this->getURL();
        if (file_exists("../private/controller/" . $URL[0] . "Controller.php")) {
            $this->controller = $URL[0];
            unset($URL[0]);
        }

        require "../private/controller/" . $this->controller . "Controller.php";
        $this->controller = $this->controller."Controller";
        $this->controller = new $this->controller();

        if (isset($URL[1])) {
            if (method_exists($this->controller, $URL[1])) {
                $this->method = $URL[1];
                unset($URL[1]);
            }
        }
        $URL=array_values($URL); // reset the array index
        $this->parameters = $URL;
        call_user_func_array([$this->controller, $this->method], $this ->parameters);

    }

    private function getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "Home"; // Set a default value
        //get the url information sanitize to eliminate illegal characters assign to an array by seperating using "/"
        return explode("/", filter_var(trim($url, "/")), FILTER_SANITIZE_URL);

    }
}