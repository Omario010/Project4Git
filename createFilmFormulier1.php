<!doctype html>
<html>
	<!-- Jasper -->
	<head>
		<title>createFilmsFormulier1</title>
		<link rel="stylesheet" href="styler.css">
	</head>
	<body>


        <div class="Logocreatefilm">
            <a href="home.php">
            <img src=kikker(1).png>
    </a>
    </div>
        <div class="welkomFilmscreate">
		<h1>toevoegen films formulier 1</h1>
        </div>
        <div class="FilmsCreateform">
		<form action="createFilmFormulier2.php" method="post">
			
		  
			<label for = "filmNaamvak">filmNaam: </label>
			<input type = "text" name = "filmNaamvak"></input>
			<br/>
			<label for = "filmDatumvak">filmDatum: </label>
			<input type = "text" name = "filmDatumvak"></input>
			<br/>
			<label for = "filmTijdsduurvak">filmTijdsduur: </label>
			<input type = "text" name = "filmTijdsduurvak"></input>
			<br/>
			<label for = "filmGrenevak">filmGrene: </label>
			<input type = "text" name = "filmGrenevak"></input>
			<br/>
			<label for = "filmLeeftijdvak">filmLeeftijd: </label>
			<input type = "text" name = "filmLeeftijdvak"></input>
			<br/>
			<label for = "filmOmschrijving">filmOmschrijving: </label>
			<input type = "text" name = "filmOmschrijvingvak"></input>
			<br/>
			<input type="submit">
		</form>
        </div>
		<br>

	</body>
</html>

