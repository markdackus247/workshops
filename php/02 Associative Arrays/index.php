<?php

// Functie om alle record van de education tabel te verkrijgen.
require 'models/Educations.php';

// Functie gebruikt om foutmeldingen af te vangen.
require 'errors/error.php';

// Hier wordt de internetverbinding aangeroepen.
require 'config/db.conf.php';
require 'database/db.connection.php';

// Hier worden alle  opleidingen opgehaald.
$educations = selectAll($pdo);

$title = "MBO GO Digital";

require 'views/home.php';
