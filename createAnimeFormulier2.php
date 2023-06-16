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
$student1 = new animeKlantInfo($GekekenDatum, $AnimeNaam, $GekekenTijd); // maakt object
$student1->createAnimeKlantInfo();		// zet het object in de tabel
$student1->afdrukkenAnimeKlantInfo();	// drukt objectgegevens af
?>

<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
</body>
</html>

<?php


$databaseHost = 'localhost';
$databaseName = 'project4';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$id = $_GET['anime_id'];



$sql="select * from competitors where (id='$Anime_id');";//  check id is already copied

$res=mysqli_query($mysqli,$sql);

if (mysqli_num_rows($res) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($res);
    if($Anime_id==$row['anime_id'])
    {
        echo "Deze anime is al in de lijst"; //error message if already copied

    }

} else{



    $query=mysqli_query($mysqli,"INSERT INTO klant
SELECT * FROM  anime WHERE Anime_id =$Anime_id");// copy one table to another

    echo "De anime is toegevoegd";


}

?>