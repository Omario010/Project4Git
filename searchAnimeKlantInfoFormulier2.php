<!doctype html>
<html lang="en">

<head>
    <title>search anime formulier 2</title>
</head>
<body>
<h1>search anime formulier 2</h1>

<?php

require "AnimeKlantInfo.php";			// nodig om object te maken
require "FilmsConnect.php";	// verbinding maken database

// uitlezen vakje van searchStudentForm1 -------------------------
$Anime_id = $_POST["studentIdVak"];
$anime1 = new Anime(); // maakt object
$anime1->searchAnime($Anime_id);
$anime1->afdrukkenAnime();
?>

<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
</body>
</html>