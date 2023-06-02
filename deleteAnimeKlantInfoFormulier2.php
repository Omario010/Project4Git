<!doctype html>
<html lang="en">
	<head>
		<title>delete anime formulier 2</title>
	</head>
	<body>
		<h1>delete anime formulier 2</h1>

		<?php

			require "AnimeKlantInfo.php";					// nodig om object te maken
			$studentid = $_POST["AnimeIdVak"];	// uitlezen vakje van deleteStudentForm1
			$student1 = new AnimeKlantInfo();				// object aanmaken
			$student1->searchAnimeKlantInfo($Anime_id);
			$student1->afdrukkenAnimeKlantInfo();
		?>

		<form action="deleteAnimeKlantInfoFormulier3.php" method="post">
			<!-- $studentid mag niet meer gewijzigd worden -->
			<input type="hidden" name="studentIdVak" value=" <?php echo $Anime_id ?> ">
			<!-- 2x verwijderBox om nee of ja door te kunnen geven -->
			<input type="hidden" 	name="verwijderBox" value="nee">
			<input type="checkbox" 	name="verwijderBox" value="ja">
			<label for="verwijderBox"> Verwijder deze student.</label><br/><br/>
			<input type="submit"><br/><br/>
		</form>

		<a href="Project4Menu.php">Terug naar het hoofdmenu</a>
	</body>