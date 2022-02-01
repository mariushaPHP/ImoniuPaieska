<?php

$router->define([
    '/' => 'controllers/home.php',
    '/add-task'=>'controllers/add-task.php',
    '/visosImones' => 'controllers/visosImones.php',
    '/delete-task' => 'controllers/delete-task.php',
    '404' => 'controllers/404.php'
]);



