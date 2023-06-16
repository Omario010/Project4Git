<!doctype html>
<html>
	<!-- Jasper -->
	<head>
	<style>
          ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
  }
  
  li a:hover {
    background-color: #111;
  }
</style>

<ul>
<li><a class="active" href="home.php">Home</a></li>
</ul>
		<title>delete film formulier 2</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<h1>delete film formulier 2</h1>

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
