<?php
namespace MVC\core;
class App{
    private $controller = 'usercontroller';
    private $method = 'index';
    private $params = [] ;

    public function  __construct()
    {
        
        $this->url();
        $this->render();
        
    }

    private function url()
    {
        if(!empty($_SERVER['QUERY_STRING']))
        {
            $url = explode("/",$_SERVER['QUERY_STRING']);
            // This Controller
            $this->controller = isset($url[0]) ? $url[0]."controller" : "homecontroller";

            //This Method
            $this->method = isset($url[1]) ? $url[1] : "index";
            unset($url[0],$url[1]);
            //This Params
            $this->params = array_values($url);
        }
    }
    private function render()
    {
        $controller = "MVC\controllers\\" . $this->controller;
        if(class_exists($controller)){

            // $controller = new controller();
            
            if(method_exists($controller,$this->method)){
                call_user_func_array([new $controller,$this->method],$this->params);
            }else{
                echo "Not Found Method";
            }
        }else
        {
            echo "Not Found This Controller";
        }


    }
}