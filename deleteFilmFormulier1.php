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
		<title>deleteFilmFormulier1</title>
		<link rel="stylesheet" href="styler.css">
	</head>
	<body>
		<h1>verwijderen film formulier 1</h1>
		<form action="deleteFilmFormulier2.php" method="post">
	
			<label for = "filmIdvak">filmId: </label>
			<input type = "text" name = "filmIdvak"></input>
		
			<input type="submit">
		</form>
	    <br><br/>
		<img src="images/warning-sign-304370_1280.png" alt="popcorn" style="width:300px;height:300px;">
	</body>
</html>
