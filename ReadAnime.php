<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>afdrukken anime</title>
</head>
<body>
<h1>afdrukken anime</h1>
<p>Dit zijn alle gegevens uit de animetabel.</p>

<?php
require "Anime.php";    // nodig om object te maken
$anime1 = new Anime();
$anime1->readAnime();
?>

<a href="Project4Menu.php"><br/>Terug naar het hoofdmenu</a>
</body>
</html>
