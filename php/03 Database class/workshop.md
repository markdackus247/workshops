# Database class

**In deze paragraaf ga je leren hoe je een class kunt maken om de database beheren.**

### 1. Bestudeer
[![](scherm.png)](https://www.youtube.com/playlist?list=PLRDVUEnDeEU7vj_tNnP7QF6TTLwwT7Sg_)
> Bestudeer deze video waarin wordt uitgelegd wat een class is en hoe je een klas moet maken.


### 2. User Class aanmaken
> Maak een bestand aan waar je de database class in gaat aanmaken **database/Database.php**. Let op de hoofdletter D. Classes beginnen altijd met een hoofdletter. Maak de onderstaande properties aan in de class.

| Access specifier | Property | type |
| :--- | :--- | :--- |
| public | hostname | string |
| public | dbname | string |
| public | username | string |
| public | password | string |
| public | charset | string |
| public | options | array |
| private | connection | PDO |

```php
class Database {
    public string $hostname;
    // Hier komen de properties.
}
```

### 3. Constructor
> Maak een constructor aan in de Database class. De constructor heeft als parameter de $dbSettings variabele zoals in de vorige workshop.

```php
class Database {
    public string $hostname;
    // Hier komen de properties.

    public function __construct($dbSettings) {

    }
}
```


### 4. Properties waarde toekennen.
> Zorg vervoor dat de waarden van $dbSettings in de constructor worden toegewezen aan de properties.

```php
class Database {
    public string $hostname;
    // Hier komen de properties.

    public function __construct($dbSettings) {
        $this->hostname = $dbSettings["host"];
        // Zorg hier dat die andere properties ook een waarde krijgen.
    }
}
```


### 5. Database object
> Open het bestand **opleidingen/index.php** en voeg hier een require toe om het bestand **database/Database.php** binnen te halen en maak van class Database een nieuw object $dbObject.
```php
// Voeg hier een require toe voor het bestand "config/db.conf.php".
// Voeg hier een require toe voor het bestand "database/Database.php".

$dbObject = new Database($dbSettings);

// Geef een melding als de verbinding me de databaseserver gelukt is.
```


### 6. Tweede database aanmaken
> 
