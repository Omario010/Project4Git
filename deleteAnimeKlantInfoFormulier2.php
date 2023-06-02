<!doctype html>
<html lang="en">
	<head>
		<title>delete anime formulier 2</title>
	</head>
	<body>
		<h1>delete anime formulier 2</h1>

		<?php

			require "AnimeKlantInfo.php";					// nodig om object te maken
			$Anime_id = $_POST["AnimeIdVak"];	// uitlezen vakje van deleteAnimeKlantForm1
			$anime1 = new AnimeKlantInfo();				// object aanmaken
        $anime1->searchAnimeKlantInfo($Anime_id);
        $anime1->afdrukkenAnimeKlantInfo();
		?>

		<form action="deleteAnimeKlantInfoFormulier3.php" method="post">
			<!-- $Anime_id mag niet meer gewijzigd worden -->
			<input type="hidden" name="studentIdVak" value=" <?php echo $Anime_id ?> ">
			<!-- 2x verwijderBox om nee of ja door te kunnen geven -->
			<input type="hidden" 	name="verwijderBox" value="nee">
			<input type="checkbox" 	name="verwijderBox" value="ja">
			<label for="verwijderBox"> Verwijder deze AnimeInfo.</label><br/><br/>
			<input type="submit"><br/><br/>
		</form>

		<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
	</body>