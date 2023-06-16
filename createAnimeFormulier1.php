<!doctype html>
<html lang="en">

<head>
    <title>create anime formulier 1</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
<div class="divwelkomcreateanime">
<h1>Voeg hier uw favoriete anime in!</h1>
</div>

<div class="logoanimecreate">
    <a href="Project4Menu.php">
    <img src=kikker(1).png>
    </a>

</div>

<div class="formcreateanime">
<form action="createAnimeFormulier2.php" method="post">
    <label for="AnimeNaamvak">Anime naam:</label>
    <input type="text" id = "AnimeNaamvak" name="AnimeNaamvak"><br/>
    <label for="GekekenAnimeTijdvak">Gekeken anime tijd:</label>
    <input type="text" id = "GekekenAnimeTijdvak" name="GekekenAnimeTijdvak"><br/>
    <label for="GekekenAnimeDatumvak">Gekeken anime datum:</label>
    <input type="text" id = "GekekenAnimeDatumvak" name="GekekenAnimeDatumvak"><br/>
    <input type="submit">
</form>
</div>
</body>
</html>


