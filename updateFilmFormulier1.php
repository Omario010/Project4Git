<!doctype html>
<html>
	<!-- Jasper -->
	<head>
		<title>Update film Formulier1</title>
		<link rel="stylesheet" href="styler.css">
	</head>
	<body>

    <div class="Logoupdatefilm1">
        <a href="home.php">
            <img src=kikker(1).png>
        </a>
    </div>


    <div class="welkomupdatefilms">
		<h1>pas hier uw favoriete films aan!</h1>
    </div>
        <div class="formfilmupdate">
		<form action="UpdateFilmFormulier2.php" method="post">
			<label for = "filmIdvak">filmId: </label>
			<input type = "text" name = "filmIdvak"></input>
			<br/>
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
			<input type="submit">
		</form>
        </div>
	</body>
</html>
