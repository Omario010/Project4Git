<?php

// aanmeldForm2.php
//omar abidi
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "Klant.php";

//echo"<h1>Aanmeldformulier klant 2</h1>";

//uitlezen array van aanmeldForm1.php
$klantVoornaam=$_POST["voornaamvak"];
$klantAchternaam=$_POST["achternaamvak"];

//maken object
$klant1 = new Klant($klantVoornaam, $klantAchternaam);
//zet het object in de database
$klant1->aanmelden();

//afdrukken object
//echo"Deze klant is aangemeld: <br/>";
$klant1->afdrukkenKlant();
?>

    <div class="kikkerForm2">
        <a href="index.php">
        <img src="kikker(1).png">
        </a>
    </div>


<div class="linkloginForm">
    <br/><br/><a href="loginForm1.php">Log hier in!</a>
</div>





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

<div class="present">
    <div class="lid">
        <span></span>
    </div>
    <div class="promo">
        <h2>Je bent aangemeld!</h2>
        <p>Frog Films</p>
    </div>
    <div class="box">
        <span></span>
        <span></span>
    </div>
</div>

</body>
</html>
