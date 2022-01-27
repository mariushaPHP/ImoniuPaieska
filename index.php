<?php 

require 'vendor/autoload.php';
use UAB\Request;
use UAB\Router;

require Router::load('routes.php')->direct(Request::uri());

?>
