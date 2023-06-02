<!doctype html>
<html lang="en">

<head>
    <title>update student formulier 3</title>
</head>
<body>
<h1>update student formulier 3</h1>

<?php
require "AnimeKlantInfo.php";

// gegevens uit de array in variabelen stoppen
$studentid = $_POST["studentIdVak"];
$naam = $_POST["naamVak"];
$postcode = $_POST["postcodeVak"];
$opleiding = $_POST["opleidingVak"];

// maken object ---------------------------------------------------
$student1 = new AnimeKlantInfo($opleiding, $naam, $postcode); // maakt object
$student1->updateStudent($studentid);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $studentid."<br/>";
$student1->afdrukkenStudent();	                       // drukt object af

?>
<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
</body>
</html>