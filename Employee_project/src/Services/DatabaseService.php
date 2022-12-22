<?php

namespace Zilvinas\EmployeeProject\Services;

use PDO;
use PDOStatement;

class DatabaseService
{
    private PDO $connection;

    public function __construct(private string $table)
    {
        $this->connection = new PDO(
            'mysql:host=localhost:3306',
            'root',
            '',

            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
        );
    }
    public function get(): array
    {
        $query = 'SELECT * FROM employees.' . $this->table;

        return $this->fetchAll($query);
    }
    public function create(array $newUser): void
    {


        $query = 'INSERT INTO employees.' . $this->table . $newUser
          /*  ' (' . implode(',', $columns) . ') ' .
            'VALUES ' . "('" . implode("','", $newUser) . "')";*/

        $this->execute($query);
    }

    public function delete(int $id): void
    {
        $query = "DELETE FROM employees.{$this->table} WHERE id = $id";
        $this->execute($query);
    }
    public function execute(string $query): bool|PDOStatement
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }

    private function fetchAll(string $query): array
    {
        $statement = $this->execute($query);

        return $statement->fetchAll();
    }
}
