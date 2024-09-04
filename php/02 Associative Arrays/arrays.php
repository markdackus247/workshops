<?php

echo "arrays.php";
echo "<br>";

require 'config/db.conf.php';
require 'database/db.connection.php';

// array
$credentialsMySQL = ["localhost", "phpworkshops", "phpworkshopsUser","E@3b0c44298"];

// echo "<pre>";
// print_r($dbSettings);
// echo "</pre>";

$dbSettings["host"] = "127.0.0.1";

echo $dbSettings["host"];
echo "<br>";
echo $dbSettings["db"];
echo "<br>";
echo $dbSettings["username"];
echo "<br>";
echo $dbSettings["password"];
echo "<br>";
echo $dbSettings["charset"];
echo "<br>";
echo $dbSettings["options"]["assoc"];
echo "<br>";


// key value pairs
// echo "<pre>";
// print_r($credentialsMySQL);
// echo "</pre>";
