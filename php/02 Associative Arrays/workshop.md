# Associative Arrays

**In deze workshop ga je leren wat associative array zijn hoe je ze moet maken en gebruiken.**

### 1. Bestudeer
> Bestudeer deze video waarin wordt uitgelegd wat een associative array is en hoe je hem moet gebruiken in php: [uitleg associative arrays](https://youtu.be/IdB2z5yVVNI?feature=shared). Doe de video ook even na.


### 2. Associative array voor variabelen database
> Open het bestand config/db.conf.php. Maak een associative array $dbSettings = [] aan met daarin de variabelen die je gebruikt om de database verbinding aan te maken.
```php
// Maak het voorbeeld af.
$dbSettings = [
    "host" => "localhost",
    // ...
];
```

### 3. Associative array gebruiken
> Open de controller pagina van het gebruikersoverzicht users/index.php. Maak een tabel (HTML) waarin de gegevens staan.

| key           | value             |
| :------------ | :---------------- |
| host          | localhost         |
| db            | phpworkshops      |
| username      | phpworkshopsUser  |
| password      | 'E@3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'  |
| charset       | utf8mb4           |
