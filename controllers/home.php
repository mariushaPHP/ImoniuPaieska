<?php

use UAB\Task;
use UAB\Database;

$connect = Database::connect();
$tasks = new Task($connect);


if(isset($_POST['search']) && !empty($_POST['input_search'])){
    $fields = [];
    $fields = $tasks->findTask($_POST['select'], $_POST['input_search']);
}


require 'view/pages/home.view.php';
?>