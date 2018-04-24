<?php

use Core\Router;


define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

require_once (ROOT . DS . 'app' . DS . 'lib' . DS . 'Dev.php');

require_once (ROOT . DS . 'vendor' . DS . 'autoload.php');

session_start();


$router = new Router();

$router->run();