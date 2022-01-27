<?php

use UAB\Database;

$connect = Database::connect();

var_dump($connect);

require 'view/pages/home.view.php';
?>