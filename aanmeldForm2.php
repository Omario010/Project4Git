<?php

// aanmeldForm2.php
//omar abidi
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "Klant.php";

echo"<h1>Aanmeldformulier klant 2</h1>";

//uitlezen array van aanmeldForm1.php
$klantVoornaam=$_POST["voornaamvak"];
$klantAchternaam=$_POST["achternaamvak"];

//maken object
$klant1 = new Klant($klantVoornaam, $klantAchternaam);
//zet het object in de database
$klant1->aanmelden();

//afdrukken object
echo"Deze klant is aangemeld: <br/>";
$klant1->afdrukkenKlant();
?>
<br/><br/><a href="index.php">Terug naar hoofdmenu.</a>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
<?php
foreach($klanten as $klant){
    echo "<tr>";
    echo "<td>" . $klant->getKlantVoorNaam() . "</td>";
    echo "<td>" . $klant->getKlantAchternaam()  . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<table class="content-table">
    <tr>
        <th>Voornaam:</th>
        <th>Achternaam:</th>
    </tr>
</table>
</body>
</html>
