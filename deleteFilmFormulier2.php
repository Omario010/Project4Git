<!doctype html>
<html>
	<!-- Jasper -->
	<head>
	
		<title>delete film formulier 2</title>
		<link rel="stylesheet" href="styler.css">
	</head>
	<body>
		<h1>verwijderen film formulier 2</h1>

		<?php
			require "Film.php";
			
			// uitlezen vakjes van createStudentForm1 -----
			$filmId=$_POST["filmIdvak"];
			

			// maken object -------------------------------
			$film = new Film();
            $film->readFilm($filmId);
			$film->delete();

			// afdrukken object ---------------------------
            echo "de volgende film is verwijderd<br/><br/>";
			echo $film->kijken();
			echo "<br/><br/>";
			echo $film->afdrukken();
		?> 	
	</body>
</html>
