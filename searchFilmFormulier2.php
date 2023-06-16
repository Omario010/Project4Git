<!doctype html>
<html>
	<!-- jasper -->
	<head>
	
		<title>search films formulier 2</title>
		<link rel="stylesheet" href="styler.css">
	</head>
	<body>
		<h1>zoeken films formulier 2</h1>

		<?php
			require "Film.php";
			
			// uitlezen vakjes van createStudentForm1 -----
			$filmId=$_POST["filmIdvak"];
			

			// maken object -------------------------------
			$film = new Film($filmId,);
			$film->search();

			// afdrukken object ---------------------------
		
			echo $film->kijken();
			echo "<br/><br/>";
			echo $film->afdrukken();
		?> 	
	</body>
</html>
