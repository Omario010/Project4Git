<!doctype html>
<html lang="en">

<head>
    <title>update anime formulier 3</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
<h1>update anime formulier 3</h1>
<a href="index.php">
    <div class="logohoofd1">
        <link rel="stylesheet" href="styler.css">
        <img src=kikker(1).png>
</a>
</div>
<?php
require "animeKlantInfo.php";

// gegevens uit de array in variabelen stoppen
$Anime_id = $_POST["AnimeIdVak"];
$AnimeNaam = $_POST["AnimeNaamVak"];
$GekekenDatum = $_POST["GekekenDatumVak"];
$GekekenTijd = $_POST["GekekenTijdVak"];

// maken object ---------------------------------------------------
$anime1 = new animeKlantInfo($Anime_id, $GekekenDatum, $GekekenTijd); // maakt object
$anime1->updateAnimeKlantInfo($Anime_id);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $Anime_id."<br/>";
$anime1->afdrukkenAnimeKlantInfo();	                       // drukt object af

?>
<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
</body>
</html>