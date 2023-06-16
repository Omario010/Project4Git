<!doctype html>
<html>
	<!-- Jasper -->
	<head>
	
		<title>toevoegen films formulier 2</title>
		<link rel="stylesheet" href="styler.css">
	</head>
	<body>
		<h1>create films formulier 2</h1>
      

<?php
require "Film.php";
			
// uitlezen vakjes van createStudentForm1 -----

$filmNaam=$_POST["filmNaamvak"];
$filmDatum=$_POST["filmDatumvak"];
$filmTijdsduur=$_POST["filmTijdsduurvak"];
$filmGrene=$_POST["filmGrenevak"];
$filmLeeftijd=$_POST["filmLeeftijdvak"];
$filmOmschrijving=$_POST["filmOmschrijvingvak"];
			

// maken object -------------------------------
$film = new Film($filmNaam, $filmDatum, $filmTijdsduur, $filmGrene, $filmLeeftijd, $filmOmschrijving );
$film->create();

// afdrukken object ---------------------------
		
echo $film->kijken();
echo "<br/><br/>";
echo $film->afdrukken();

?> 	
<form action="index.php" method="post">
<button type="button">terug hoofdpagina</button>
<form>
</body>
</html>
