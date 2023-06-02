<!doctype html>
<html lang="en">

<head>
    <title>update student formulier 2</title>
</head>
<body>
<h1>update student formulier 2</h1>

<?php

require "AnimeKlantInfo.php";					// nodig om object te maken
$Anime_id = $_POST["animeIdVak"];	// uitlezen vakje van deleteStudentForm1
$anime1 = new AnimeKlantInfo();				// object aanmaken
$anime1->searchAnimeKlantInfo($Anime_id);
// properties in variabelen zetten
$AnimeNaam=$anime1->get_AnimeNaam();
$GekekenDatum=$anime1->get_GekekenDatum();
$GekekenTijd=$anime1->get_GekekenTijd();
?>

<form action="updateAnimeKlantInfoFormulier3.php" method="post">
    <!-- $studentid mag niet meer gewijzigd worden -->
    <?php echo $Anime_id ?>
    <input type="hidden" name="animeIdVak" value="<?php echo $Anime_id; ?> "><br/>
    <input type="text"   name="animeNaamVak"      value="<?php echo $AnimeNaam;      ?> "><br/>
    <input type="text"   name="gekekenDatumVak"  value="<?php echo $GekekenDatum;  ?> "><br/>
    <input type="text"   name="gekekenTijdVak" value="<?php echo $GekekenTijd; ?> "><br/><br/>
    <input type="submit"><br/><br/>
</form>

<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
</body>