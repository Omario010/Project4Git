<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>afdrukken Films en anime</title>
</head>
<body>
<h1>afdrukken films en anime</h1>
<p>Dit zijn alle gegevens uit de films en anime tabellen.</p>

<?php
require "animeEnFilms.php";    // nodig om object te maken
$anime1 = new filmsAnime();
$anime1->readFilmsAnime();
?>

<a href="Project4Menu.php"><br/>Terug naar het hoofdmenu</a>
</body>
</html>
