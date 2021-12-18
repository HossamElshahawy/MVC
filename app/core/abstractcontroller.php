<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;

class abstractcontroller{

    public function view($path,$param){
        extract($param);
        require_once(VIEWS.DS.$path.".php");
    }

}