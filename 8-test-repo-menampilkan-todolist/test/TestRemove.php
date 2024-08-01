<?php

require_once __DIR__ . "/../config/Koneksi.php";
require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use Config8\Database;

##[Test]
function testRemoveTodolist(): void
{
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);

    echo $todolistService->removeToDoList(8) . PHP_EOL;
    echo $todolistService->removeToDoList(7) . PHP_EOL;
    echo $todolistService->removeToDoList(6) . PHP_EOL;
    echo $todolistService->removeToDoList(5) . PHP_EOL;
    echo $todolistService->removeToDoList(4) . PHP_EOL;
    echo $todolistService->removeToDoList(3) . PHP_EOL;
    echo $todolistService->removeToDoList(2) . PHP_EOL;
    echo $todolistService->removeToDoList(1) . PHP_EOL;
}

testRemoveTodolist();
