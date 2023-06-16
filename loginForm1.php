<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
  <div class="kikkerlogo">
<a href="index.php">
<img src=kikker(1).png>
</a>


 </div>
<!-- <form> hier moet staan de form action enzo  -->
<div class="welkomlogin">
<h1>Login hier</h1>
</div>
<div class="formlogin">

<form method="POST">
  <label for="voornaam">Voornaam:</label><br> <!-- veranderd naar VoorNaam was eerst vname-->
  <input type="text" id="voornaam" name="voornaam"><br>
<br>
  <label for="achternaam">Achternaam:</label><br>
  <input type="text" id="achternaam" name="achternaam">
<br>
<br>
  <input type="submit" value="Submit">
</form>
</div>

</body>
</html>

<?php

// Database credentials
$dbHost = 'localhost';
$dbName = 'project4';
$dbUser = 'omario010';
$dbPass = 'ViezeAap1!';

// Establish database connection
try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
    die("Database connection failed: " . $e->getMessage());
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];

    // Check if the entered credentials are valid
    $stmt = $db->prepare("SELECT * FROM klanten WHERE VoorNaam = :voornaam AND Achternaam = :achternaam");
    $stmt->bindParam(':voornaam', $voornaam);
    $stmt->bindParam(':achternaam', $achternaam);
    $stmt->execute();
//    password_verify($achternaam, $opgehaaldeww)
    if ($stmt->rowCount() > 0) {
        // Successful login
        header('Location: hoofdpagina.php');
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
}


