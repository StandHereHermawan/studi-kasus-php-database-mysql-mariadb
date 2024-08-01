<?php

namespace View {

    use Service\ToDoListService;
    use Helper\InputHelper;

    class TodolistView
    {
        private ToDoListService $toDoListService;

        public function __construct(ToDoListService $toDoListService)
        {
            $this->toDoListService = $toDoListService;
        }

        function showTodolist(): void
        {
            $repeat = true;
            while ($repeat) {
                $this->toDoListService->showToDoList();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah to do." . PHP_EOL;
                echo "2. Hapus to do." . PHP_EOL;
                echo "X. Keluar dari aplikasi to do list." . PHP_EOL;

                $pilihan = InputHelper::input("Pilih Menu");

                switch ($pilihan):
                    case "1":
                        $this->addTodolist();
                        break;
                    case "2":
                        $this->removeTodolist();
                        break;
                    case "x":
                        $repeat = false;
                        break;
                    default:
                        echo "Pilihan tidak ada pada program." . PHP_EOL;
                        break;
                endswitch;
            }

            echo "Sampai Jumpa Lagi." . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "MENAMBAH TODO" . PHP_EOL;

            $todo = InputHelper::input("to do. (\"x\" untuk batal.)");

            if ($todo == "x") {
                echo "Batal Menambah Todo." . PHP_EOL;
            } else {
                $this->toDoListService->addTodolist($todo);
            }
        }

        function removeTodolist(): void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $deletedTodo = InputHelper::input("to do. (\"x\" untuk batal.)");

            if ($deletedTodo == "x") {
                echo "Batal Menghapus Todo." . PHP_EOL;
            } else {
                $this->toDoListService->removeToDoList($deletedTodo);
            }
        }
    }
}
