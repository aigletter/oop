<?php


namespace Patterns\ActiveRecord;


class Db
{
    protected $pdo;

    protected static $instance;

    protected static $config;

    public static function setConfig($config)
    {
        self::$config = $config;
    }

    public static function getInstance()
    {
        $dsn = self::$config['dsn'];
        $user = self::$config['user'];
        $password = self::$config['password'];
        if (self::$instance === null) {
            self::$instance = new self($dsn, $user, $password);
        }

        return self::$instance;
    }

    protected function __construct($dsn, $user, $password)
    {
        $this->pdo = new \PDO($dsn, $user, $password);
    }

    public function query(string $query)
    {
        $statement = $this->pdo->query($query);
        return $statement->fetch(\PDO::FETCH_ASSOC);
    }

    public function exec(string $query)
    {
        return $this->pdo->exec($query);
    }

    public function getInsertedId()
    {
        return $this->pdo->lastInsertId();
    }
}