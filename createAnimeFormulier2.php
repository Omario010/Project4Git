<!doctype html>
<html lang="en">

<head>
    <title>create student formulier 2</title>
</head>
<body>
<h1>create student formulier 2</h1>

<?php
require "AnimeKlantInfo.php";			// nodig om object te maken
require "FilmsConnect.php";	// verbinding maken database

// uitlezen vakjes van createStudentForm1 -------------------------
$studentid = NULL;				// komt niet uit het formulier (auto increment)
$naam =      $_POST["naamvak"];
$postcode =  $_POST["postcodevak"];
$opleiding = $_POST["opleidingvak"];

// maken object ---------------------------------------------------
$student1 = new AnimeKlantInfo($opleiding, $naam, $postcode); // maakt object
$student1->createAnimeKlantInfo();		// zet het object in de tabel
$student1->afdrukkenAnimeKlantInfo();	// drukt objectgegevens af
?>

<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
</body>
</html>