<!doctype html>
<html>
	<!-- Jasper -->
	<head>
	<style>
          ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
  }
  
  li a:hover {
    background-color: #111;
  }
</style>

<ul>
<li><a class="active" href="home.php">Home</a></li>
</ul>
		<title>create films formulier 2</title>
		<link rel="stylesheet" href="main.css">
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
