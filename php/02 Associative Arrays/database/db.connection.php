<?php
// Voeg hier een require toe om de variabelen van het bestand db.conf te importeren.

$dsn = "mysql:host={$dbSettings["host"]};dbname={$dbSettings["db"]};charset={$dbSettings["charset"]}";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

echo $dsn;
echo $dbSettings["username"];
echo $dbSettings["password"];
print_r($dbSettings["options"]);

try {
    $pdo = new PDO($dsn, $dbSettings["username"], $dbSettings["password"], $dbSettings["options"]);
    echo "Database verbinding is gelukt";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}