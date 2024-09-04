<?php

// Functie om alle record van de education tabel te verkrijgen.
require $_SERVER['DOCUMENT_ROOT'] . '/models/Educations.php';

// Functie gebruikt om foutmeldingen af te vangen.
require $_SERVER['DOCUMENT_ROOT'] . '/errors/error.php';

// Hier wordt de databaseverbinding aangeroepen.
require $_SERVER['DOCUMENT_ROOT'] . '/config/db.conf.php';
require $_SERVER['DOCUMENT_ROOT'] . '/database/db.connection.php';

// Hier worden alle  opleidingen opgehaald.
$educations = selectAll($db);

$title = "MBO GO Digital";

require $_SERVER['DOCUMENT_ROOT'] . '/views/home.php';
