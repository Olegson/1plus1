<?php
namespace shop;

$callback = function($className) { // shop\Router
$className = str_replace('\\', DIRECTORY_SEPARATOR, $className); // replace "\" to "/"
$explodedName = explode('/', $className); // shop/Router
unset($explodedName[0]); // delete shop
$className = implode('/', $explodedName); // array(1 => Router) -> 'Router'
include $className . '.php'; // include 'Router.php';
};
spl_autoload_register($callback);

Router::start();