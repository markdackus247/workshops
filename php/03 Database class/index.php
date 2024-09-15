<?php

// Functie om alle record van de education tabel te verkrijgen.
// require 'models/Educations.php';

// Functie gebruikt om foutmeldingen af te vangen.
require 'errors/error.php';

// Hier wordt de internetverbinding aangeroepen.
require 'config/db.conf.php';
require 'database/Database.php';

$dbConnection = new Database($dbSettings);
$dbBackupsConnection= new Database($dbBackupSettings);

echo $dbConnection->hostname;
echo "<br>";
echo $dbConnection->dbname;
echo "<br>";
echo $dbConnection->username;
echo "<br>";
echo $dbConnection->password;
echo "<br>";
echo $dbConnection->charset;
echo "<br>";
print_r ($dbConnection->dbname);

$dbConnection->connect();
echo "<br>";

if( $dbConnection->connection ) {
    echo "Verbinding is gelukt.";
}


// require 'database/db.connection.php';

// Hier worden alle  opleidingen opgehaald.
// $educations = selectAll($pdo);

// $title = "MBO GO Digital";

// require 'views/home.php';
