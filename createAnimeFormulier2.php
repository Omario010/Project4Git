<!doctype html>
<html lang="en">

<head>
    <title>create anime formulier 2</title>
</head>
<body>
<h1>create anime formulier 2</h1>

<?php
require "animeKlantInfo.php";			// nodig om object te maken
require "FilmsConnect.php";	// verbinding maken database

// uitlezen vakjes van createStudentForm1 -------------------------
$Anime_id = NULL;				// komt niet uit het formulier (auto increment)
$AnimeNaam =      $_POST["AnimeNaamvak"];
$GekekenTijd =  $_POST["GekekenDatumvak"];
$GekekenDatum = $_POST["GekekenTijdvak"];

// maken object ---------------------------------------------------
$student1 = new AnimeKlantInfo($GekekenDatum, $AnimeNaam, $GekekenTijd); // maakt object
$student1->createAnimeKlantInfo();		// zet het object in de tabel
$student1->afdrukkenAnimeKlantInfo();	// drukt objectgegevens af
?>

<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
</body>
</html>