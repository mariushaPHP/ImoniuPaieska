<?php
use UAB\Database;
use UAB\Task;
use UAB\Validator;

$errors = [];

if(isset($_POST['save'])){
    $errors = Validator::validator($_POST);
    if(empty($errors)){
        $connection = Database::connect(); // prisijungimas prie db
        $task = new Task($connection);    // sukuria task objekta
        $task->createTask($_POST);
    }
    //var_dump($task);
}

require 'view/pages/add-task.view.php';