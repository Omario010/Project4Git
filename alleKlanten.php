<div class="kikker1">
    <a href="index.php">
        <img src="kikker(1).png">
    </a>
</div>



<?php
// alleklanten.php
// omar abidi
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require "Klant.php";
// nodig om object te maken

$klanten = Klant::alleKlanten();
?>
<table class="content-table">
<tr>    
    <th>Voornaam:</th>
    <th>Achternaam:</th>
</tr>
<?php
foreach($klanten as $klant){
    echo "<tr>";
    echo "<td>" . $klant->getKlantVoorNaam() . "</td>";
    echo "<td>" . $klant->getKlantAchternaam()  . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

<!--<div class="kikker1">-->
<!--<a href="index.php">-->
<!--<img src="kikker(1).png">-->
<!--</a>-->
<!--</div>-->
    <link rel="stylesheet" href="styler.css">


