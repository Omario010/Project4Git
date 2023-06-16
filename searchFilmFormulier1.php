<!doctype html>
<html>
	<!-- jasper -->
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
  <<li><a class="active" href="home.php">Home</a></li>
</ul>
		<title>searchFilmFormulier1</title>
		<link rel="stylesheet" href="styler.css">
	</head>
	<body>
		<h1>create films formulier 1</h1>
		<form action="searchFilmFormulier2.php" method="post">
			<label for = "filmId">filmId: </label>
			<input type = "text" name = "filmIdvak"></input>
			<br/>
			<input type="submit">
		</form>
	</body>
</html>
