<?php


namespace solid;


class DbSource implements SourceInterface
{
    public function load($id): ?array {
        $pdo = new \PDO('mysql:dbname=examples;host=127.0.0.1', 'root', '1q2w3e');
        $result = $pdo->query("SELECT * FROM orders WHERE id = " . $id);
        $data = $result->fetch(\PDO::FETCH_ASSOC);

        return $data;
    }
}