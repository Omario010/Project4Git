<!doctype html>
<html>
	<!-- Jasper -->
	<head>
		<title>createFilmsFormulier1</title>
		<link rel="stylesheet" href="styler.css">
	</head>
	<body>
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

		<h1>toevoegen films formulier 1</h1>
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
		<br>
		<img src="images/list-2389219_1280.webp" alt="popcorn" style="width:300px;height:300px;">
	</body>
</html>

