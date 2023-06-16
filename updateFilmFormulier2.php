<!doctype html>
<html>
	<!-- Omar -->
	<head>
		<title>update film formulier 2</title>
	</head>
	<body>
		<h1>update film formulier 2</h1>
		<link rel="stylesheet" href="styler.css">

		<?php
			require "Film.php";
			
			// uitlezen vakjes van updateStudentForm1 -----
			$filmId=$_POST["filmIdvak"];
			$filmNaam=$_POST["filmNaamvak"];
			$filmDatum=$_POST["filmDatumvak"];
			$filmTijdsduur=$_POST["filmTijdsduurvak"];
			$filmGrene=$_POST["filmGrenevak"];
			$filmLeeftijd=$_POST["filmLeeftijdvak"];
		

			// maken object -------------------------------
			$film = new Film($filmId, $filmNaam, $filmDatum, $filmTijdsduur, $filmGrene, $filmLeeftijd);
			$film->update();

			// afdrukken object ---------------------------
		
			echo $film->kijken();
			echo "<br/><br/>";
			echo $film->afdrukken();
		?> 	
	</body>
</html>
