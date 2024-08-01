<?php

require_once __DIR__ . "/../config/Koneksi.php";
require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";
require_once __DIR__ . "/../view/TodolistView.php";
require_once __DIR__ . "/../helper/InputHelper.php";

use Repository\TodolistRepositoryImpl;
use Service\ToDoListServiceImpl;
use Config8\Database;

function testViewShowTodolist(): void
{
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new ToDoListServiceImpl($todolistRepository);

    $todolistService->addToDoList("Belajar PHP Dasar");
    $todolistService->addToDoList("Belajar PHP OOP");
    $todolistService->addToDoList("Belajar PHP Web");

    $todolistService->showTodolist();
}

testViewShowTodolist();
