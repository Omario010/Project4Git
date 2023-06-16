<!doctype html>
<html lang="en">
<head>
    <title>delete anime formulier 3</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
<h1>delete anime formulier 3</h1>
<a href="index.php">
    <div class="logohoofd1">
        <link rel="stylesheet" href="styler.css">
        <img src=kikker(1).png>
</a>
</div>
<?php
require "animeKlantInfo.php";

$Anime_id = $_POST["animeIdVak"];
$verwijderen = $_POST["verwijderBox"];

if ($verwijderen=="ja")
{
    echo "De student is verwijderd <br/>";
    $student1 =  new animeKlantInfo();
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