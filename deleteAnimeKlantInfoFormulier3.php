<!doctype html>
<html lang="en">
<head>
    <title>delete anime formulier 3</title>
</head>
<body>
<h1>delete anime formulier 3</h1>

<?php
require "AnimeKlantInfo.php";

$Anime_id = $_POST["animeIdVak"];
$verwijderen = $_POST["verwijderBox"];

if ($verwijderen=="ja")
{
    echo "De student is verwijderd <br/>";
    $student1 =  new AnimeKlantInfo();
    $student1->deleteAnimeKlantInfo($Anime_id);
}
else
{
    echo "De AnimeInfo is niet verwijderd <br/>";
}
?>
<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
</body>
</html>