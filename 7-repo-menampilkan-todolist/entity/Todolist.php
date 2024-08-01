<?php

namespace Entity {

    class Todolist
    {

        private string $todolist;

        private int $id;

        public function __construct(string $todolist = "")
        {
            $this->todolist = $todolist;
        }

        public function getTodo(): string
        {
            return $this->todolist;
        }

        public function setTodo(string $todolist): void
        {
            $this->todolist = $todolist;
        }

        public function getId(): int
        {
            return $this->id;
        }

        public function setId(int $id): void
        {
            $this->id = $id;
        }
    }
}
