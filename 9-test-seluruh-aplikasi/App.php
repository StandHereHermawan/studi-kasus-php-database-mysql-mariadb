<?php

require_once __DIR__ . "/config/Koneksi.php";
require_once __DIR__ . "/entity/Todolist.php";
require_once __DIR__ . "/repository/TodolistRepository.php";
require_once __DIR__ . "/service/TodolistService.php";
require_once __DIR__ . "/view/TodolistView.php";
require_once __DIR__ . "/helper/InputHelper.php";

use Repository\TodolistRepositoryImpl;
use Service\ToDoListServiceImpl;
use View\TodolistView;
use Config9\Database;

echo "Aplikasi Todolist." . PHP_EOL;

$connection = Database::getConnection();
$todolistRepository = new TodolistRepositoryImpl($connection);
$todolistService = new ToDoListServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();
