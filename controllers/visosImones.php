<?php

use UAB\Task;
use UAB\Database;

$connect = Database::connect();
$tasks = new Task($connect);

require 'view/pages/visosImones.view.php';