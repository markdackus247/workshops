# Database class

**In deze paragraaf ga je leren hoe je een class kunt maken om de database beheren.**

### 1. Bestudeer

[![](scherm.png)](https://www.youtube.com/playlist?list=PLRDVUEnDeEU7vj_tNnP7QF6TTLwwT7Sg_)

> Bestudeer deze video waarin wordt uitgelegd wat een class is en hoe je een klas moet maken.

### 2. User Class aanmaken

> Maak een bestand aan waar je de database class in gaat aanmaken **database/Database.php**. Let op de hoofdletter D. Classes beginnen altijd met een hoofdletter. Maak de onderstaande properties aan in de class.

| Access specifier | Property   | type    | default value |
| :--------------- | :--------- | :------ | :------------ |
| public           | hostname   | ?string | localhost     |
| public           | dbname     | ?string | null          |
| public           | username   | ?string | root          |
| public           | password   | ?string | empty string  |
| public           | charset    | string  | utf8mb4       |
| public           | options    | ?array  | []            |
| public           | connection | ?PDO    | null          |

```php
class Database {
    public ?string $hostname;
    // Hier komen de properties.
}
```

### 3. Constructor

> Maak een constructor aan in de Database class. De constructor heeft als parameter de $dbSettings variabele zoals we die gemaakt hebben in de vorige workshop.

```php
class Database {
    public string $hostname;
    // Hier komen de properties.

    public function __construct($dbSettings) {

    }
}
```

### 4. Properties waarde toekennen.

> Zorg ervoor dat de waarden van $dbSettings in de constructor worden toegewezen aan de properties.

```php
class Database {
    public string $hostname;
    // Hier komen de properties.

    public function __construct($dbSettings) {
        $this->hostname = $dbSettings["host"];
        $this->dbname = $dbSettings["db"];
        // Zorg dat ook de andere properties username, password, charset en options.
    }
}
```

### 5. Method connect()

> Maak een method connect() aan binnen de class Database. Zorg dat deze functie de database connectie opslaat in de variabele $connection.

```php
private function connect() {

    try {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=". $this->charset;
        $this->connection = new PDO($dsn, $this->username, $this->password, $this->options);
    } catch(PDOException $e) {
        echo "Connection Error: " . $e->getMessage();
    }

}
```

### 6. connect() method aanroepen in contructor

> Zorg dat de method connect() wordt aangeroepen in de constructor. Waarom kan de toegangsmodificatoren (access modifiers) private zijn voor de method connect().

```php
public function __construct($dbSettings) {
    $this->setDBsettings($dbSettings);
    $this->connect();
}
```

### 5. Database object

> Open het bestand **users/list/index.php** en voeg hier twee keer een require toe om het bestand **copfig/db.conf.php** en **database/Database.php** binnen te halen en maak van class Database een nieuw object $dbObject.

```php
// Voeg hier een require toe voor het bestand "config/db.conf.php".
// Voeg hier een require toe voor het bestand "database/Database.php".

$dbObject = new Database($dbSettings);

// Geef een melding als de verbinding me de databaseserver gelukt is.
// Gebruik hiervoor de property $dbObject->connection en een if statement.
```

### 6. Tweede database aanmaken

> Maak een tweede database aan met de naam "phpworkshops_backup". Maak ook een gebruiker aan in MySQL met de onderstaande gegevens.

| key      | value                             |
| :------- | :-------------------------------- |
| host     | localhost                         |
| db       | phpworkshop_backup                |
| username | phpworkshop_backupUser            |
| password | aB3dE5fG7hI9jK1lM2nO4pQ6rS8tU0v#5 |

### 7. Tweede variabele aanmaken

> Maak een tweede variabele $dbBackupSettings aan met de gegevens van de database connectie. Doe dit in het bestand **config/db.conf.php**.

```php
$dbBackupSettings = [
    "host" => "localhost",
    "db" => "",
    "username" => "",
    "password" => "",
    "charset" => "utf8mb4",
    "options" => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]
];
```

### 8. Tweede databaseverbinding
> Open het bestand **users/list/index.php** en maak hier een tweede database verbinding aan.

```php
$dbBackupObject = new Database($dbBackupSettings);
```

### 9. Create table user met query.
> Open het bestand **users/list/index.php** en maak hier een variable aan $sqlCreateUserTable met de query om de gebruikerstabel aan te maken. Probeer te begrijpen wat hieronder staat?
```php
$sqlCreateUserTable = "CREATE TABLE user (
    id CHAR(36) PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    birth_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);";
```

### 9. createTable() method
> Voeg een method createTable() toe aan de class Database.

```php
public function createTable($query) {
    $stmt = $this->connection->prepare($query);
    return $stmt->execute();
}
```

### 10. Create table query
> Voeg een method createTable() toe aan de class Database.