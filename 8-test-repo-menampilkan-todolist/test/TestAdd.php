<?php

require_once __DIR__ . "/../config/Koneksi.php";
require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use Config8\Database;

##[Test]
function testAddTodolist(): void
{
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addToDoList("Belajar PHP di PZN");
    $todolistService->addToDoList("Belajar Laravel di PZN");
    $todolistService->addToDoList("Belajar Bootstrap di PZN");
}

testAddTodolist();
