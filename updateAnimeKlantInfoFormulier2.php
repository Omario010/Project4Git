<!doctype html>
<html lang="en">

<head>
    <title>update student formulier 2</title>
</head>
<body>
<h1>update student formulier 2</h1>

<?php

require "AnimeKlantInfo.php";					// nodig om object te maken
$studentid = $_POST["studentIdVak"];	// uitlezen vakje van deleteStudentForm1
$student1 = new AnimeKlantInfo();				// object aanmaken
$student1->searchStudent($studentid);
// properties in variabelen zetten
$naam=$student1->get_naam();
$postcode=$student1->get_postcode();
$opleiding=$student1->get_opleiding();
?>

<form action="updateAnimeKlantInfoFormulier3.php.php" method="post">
    <!-- $studentid mag niet meer gewijzigd worden -->
    <?php echo $studentid ?>
    <input type="hidden" name="studentIdVak" value="<?php echo $studentid; ?> "><br/>
    <input type="text"   name="naamVak"      value="<?php echo $naam;      ?> "><br/>
    <input type="text"   name="postcodeVak"  value="<?php echo $postcode;  ?> "><br/>
    <input type="text"   name="opleidingVak" value="<?php echo $opleiding; ?> "><br/><br/>
    <input type="submit"><br/><br/>
</form>

<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
</body>