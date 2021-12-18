<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("CONFIG",APP.DS.'config');
define("CONTROLLERS",APP.DS.'controllers');
define("CORE",APP.DS.'core');
define("MODELS",APP.DS.'models');
define("VIEWS",APP.DS.'views');


//CONFIG
define("SERVER","Localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","test");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://mvc2.test/");

require_once ("../vendor/autoload.php");

$new = new MVC\core\App();