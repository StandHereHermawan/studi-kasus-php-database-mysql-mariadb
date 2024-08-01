<?php

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {
        function save(Todolist $todolist): void;

        function delete(int $number): bool;

        function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {
        private array $todolist = array();

        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        public function save(Todolist $todolist): void
        {
            # $todolistSize = sizeof($this->todolist) + 1;
            # $this->todolist[$todolistSize] = $todolist;

            $sqlSyntax = "INSERT INTO todolist(todo) VALUES (?)";
            $prepareStatement = $this->connection->prepare($sqlSyntax);
            $prepareStatement->execute([$todolist->getTodo()]);
        }

        public function delete(int $number): bool
        {
            # if ($number > sizeof($this->todolist)) {
            #     return false;
            # }
            # for ($i = $number; $i < sizeof($this->todolist); $i++) {
            #     $this->todolist[$i] = $this->todolist[$i + 1];
            # }
            # unset($this->todolist[sizeof($this->todolist)]);
            # return true;

            $sqlSyntax = "SELECT id FROM todolist WHERE id = ?";
            $prepareStatement = $this->connection->prepare($sqlSyntax);
            $prepareStatement->execute([$number]);

            if ($prepareStatement->fetch()) {
                # to do ada di database.
                $sqlSyntax = "DELETE FROM todolist WHERE id = ?";
                $prepareStatement = $this->connection->prepare($sqlSyntax);
                $prepareStatement->execute([$number]);
                return true;
            } else {
                return false;
            }
        }

        public function findAll(): array
        {
            return $this->todolist;
        }

        public function addForTesting(string|Todolist $todolist): void
        {
            $this->todolist[] = $todolist;
        }
    }
}
