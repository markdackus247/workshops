<?php
$dsn = "mysql:host={$dbSettings["host"]};dbname={$dbSettings["db"]};charset={$dbSettings["charset"]}";

try {
    $pdo = new PDO(
        $dsn, 
        $dbSettings["username"], 
        $dbSettings["password"], 
        $dbSettings["options"]
    );
} catch (\PDOException $e) {
    throw new \PDOException(
        $e->getMessage(), 
        (int)$e->getCode()
    );
}

require "../models/User.php";