<?php
namespace App\Repositories;

use App\Models\ClassResource;
use App\Models\ExamResource;
use App\Database\Connection;

class ResourceRepository
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = Connection::getPDO();
    }

    public function search(string $keyword): array
    {
        $results = [];

        $stmt = $this->pdo->prepare("SELECT * FROM classes WHERE name LIKE ?");
        $stmt->execute(["%$keyword%"]);
        foreach ($stmt->fetchAll() as $row) {
            $results[] = new ClassResource($row['name'], $row['score']);
        }

        $stmt = $this->pdo->prepare("SELECT * FROM exams WHERE name LIKE ?");
        $stmt->execute(["%$keyword%"]);
        foreach ($stmt->fetchAll() as $row) {
            $results[] = new ExamResource($row['name'], $row['type']);
        }

        return $results;
    }
}