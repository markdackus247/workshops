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

### 3. Arrays in Arrays
Het is ook gemogelijk om arrays binnen arrays te maken. Hieronder staat een associative array "options". Dit zijn de opties die je kunt meegeven als je de database gegevens gebruikt.
> Zorg dat deze array wordt van de array $dbSettings.
```php
    "options" => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]
```

### 4. PDO options
> Zoek uit wat de option "PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC" doet. Voeg uitleg (comments) to aan het bestand **"config/db.conf.php"**. Probeer chatGPT te gebruiken om je dit te laten uitleggen. Vraag om voorbeelden.


### 5. Associative array gebruiken
> Maak een controller-pagina met een overzicht van de database gegevens **admin/db/index.php**. Maak een tabel (HTML) waarin de gegevens staan.

| key           | value             |
| :------------ | :---------------- |
| host          | localhost         |
| db            | phpworkshops      |
| username      | phpworkshopsUser  |
| password      | 'E@3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'  |
| charset       | utf8mb4           |


### 6. User array aanmaken
> Maak een controller-pagina aan met de naam **user/overview/index.php**. Maak een associative array aan met de gegevens van een gebruiker. **Zie tabel hier beneden**.

```php
$userMaastricht = [
    "id" => "30960476-5296-43c0-a249-1aa28aad54f5",
    "username" => "Cor"
    // Maak verder af met de gegevens van hier beneden.
];
```

| Key | Value |
| --- | ----- |
| id | 30960476-5296-43c0-a249-1aa28aad54f5 |
| username | CorDassen |
| password | u8v9w0x1y2z3a4b5c6d7e8f9g0h1i2j3k4l5m6n |
| email | cor.dassen@outlook.com |
| first_name | Cor |
| last_name | Dassen |
| birth_date | 1976-01-14 00:00:00 |
| last_login | 2024-09-03 02:14:01 |


### 7. Nog een user array aanmaken
> Maak op dezelfde pagina nog een array aan voor een gebruiker. **Zie tabel hier beneden**.

```php
$userHeerlen = [
    "id" => "f47ac10b-58cc-4372-a567-0e02b2c3d479",
    "username" => "Theo"
    // Maak verder af met de gegevens van hier beneden.
];
```

| Key | Value |
| --- | ----- |
| id | f47ac10b-58cc-4372-a567-0e02b2c3d479 |
| username | TheoBovens |
| password | a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t |
| email | cor.dassen@outlook.com |
| first_name | Theo |
| last_name | Bovens |
| birth_date | 1954-07-09 00:00:00 |
| last_login | 2024-09-03 02:17:13 |


### 8. Detail view aanmaken
> Maak een html-pagina met de naam **views/users/detail.php**. Maak op deze pagina een tabel met alle gegevens van de gebruiker $userMaastricht. Require deze pagina binnen de pagina **user/overview/index.php**. Gebruik bootstrap 5 om deze pagina op te maken.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Example</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Hello, Bootstrap 5!</h1>
        <p class="lead">Maak hier je tabel.</p>
    </div>

    <!-- Bootstrap 5 JS and Popper.js CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

### 9. Nog een derder user array aanmaken
> Maak op dezelfde pagina nog een derde array aan voor een gebruiker. **Zie tabel hier beneden**.

```php
$userSittard = [
    "id" => "e7b8c9d2-3f4a-4b5c-8a6d-1e2f3a4b5c6d",
    "username" => "Vincent"
    // Maak verder af met de gegevens van hier beneden.
];
```

| Key | Value |
| --- | ----- |
| id | e7b8c9d2-3f4a-4b5c-8a6d-1e2f3a4b5c6d |
| username | VincentTauben |
| password | a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9 |
| email | VincentTauben |
| first_name | Vincent |
| last_name | Tauben |
| birth_date | 1967-03-21 00:00:00 |
| last_login | 2024-09-08 04:18:13 |


### 10. Array van arrays
Het is heel normaal om arrays van arrays te maken. Zou dat betekenen dat we een array maken van gebruikers (arrays).
> Maak een nieuwe array aan met de naam $allUsers[]. Voeg alle gebruikers in de arrays $userMaastricht, $userHeerlen en $userSittard toe aan deze array. Gebruik de functie array_push() om de elementen $userMaastricht, $userHeerlen en $userSittard aan de array $allUsers[] toe te voegen.


### 11. print_r()
> Gebruik de print_r() functie om de array in de html-pagina te bekijken. 
```php
echo "<pre>";
print_r($allUsers);
echo "</pre>";
```


### 12. Tabel maken
> Maak een tabel in HTML waarin je alle gebruikers kunt zien. Gebruik de functie foreach() om door de array heen te lopen.
```php
<?php
foreach ($allUsers as $user) {
    ?>
        <tr>
            <td><?php echo $user["id"] ?></td>
            <td><?php echo $user["username"] ?></td>
            <td><?php echo $user["password"] ?></td>
            <td><?php echo $user["email"] ?></td>
            <td><?php echo $user["last_name"] ?></td>
            <td><?php echo $user["birth_date"] ?></td>
            <td><?php echo $user["last_login"] ?></td>
        </tr>
<?php
}
?>
```