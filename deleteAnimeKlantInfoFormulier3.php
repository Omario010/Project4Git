<!doctype html>
<html lang="en">
<head>
    <title>delete student formulier 3</title>
</head>
<body>
<h1>delete student formulier 3</h1>

<?php
require "AnimeKlantInfo.php";

$studentid = $_POST["studentIdVak"];
$verwijderen = $_POST["verwijderBox"];

if ($verwijderen=="ja")
{
    echo "De student is verwijderd <br/>";
    $student1 =  new AnimeKlantInfo();
    $student1->deleteAnimeKlantInfo($studentid);
}
else
{
    echo "De student is niet verwijderd <br/>";
}
?>
<a href="schoolmenu.php">Terug naar het hoofdmenu</a>
</body>
</html>