<?php

use UAB\Request;
use UAB\Database;
use UAB\Task;

$id = intval(basename(Request::uri()));
//var_dump($id);// get id
$conection = Database::connect();       // connect to db
$task = new Task($conection);//
$task->deleteTask($id);