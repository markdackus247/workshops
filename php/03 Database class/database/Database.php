<?php

class Database {
    // properties
    public string $hostname = "localhost";
    public string $dbname = "";
    public string $username;
    public string $password;
    public string $charset = "utf8mb4";
    public array $options;
    public $connection;

    public function __construct($dbSettings) {
        $this->hostname = $dbSettings["host"];
        $this->dbname = $dbSettings["db"];
        $this->username = $dbSettings["username"];
        $this->password = $dbSettings["password"];
        $this->charset = $dbSettings["charset"];
        $this->options = $dbSettings["options"];
    }

    // methods
    public function connect() {
        $dsn = "mysql:host={$this->hostname};dbname={$this->dbname};charset={$this->charset}";

        try {
            $this->connection = new PDO(
                $dsn, 
                $this->username, 
                $this->password, 
                $this->options
            );
        } catch (\PDOException $e) {
            throw new \PDOException(
                $e->getMessage(), 
                (int)$e->getCode()
            );
        }
    }
}