<!doctype html>
<html>
    <!--Jasper-->
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
    <title>delete film formulier 3</title>
    <link rel="stylesheet" href="styler.css">
    </head>
    <body>
    <h1>verwijderen film formulier 3</h1>

    <?php
    require "films.php";

    $filmsId = $_POST("filmsIdVak");
    $verwijderen = $_POST("verwijderBox");

    if ($verwijderen == "ja")
    {
        echo "de film is verwijderd <br/>";
        $films1 = new Film();
        $film1->deleteFilm($filmsId);
    }
    else
    {
        echo "de film is niet verwijderd</br>";
    }
    ?>
    <a href="schoolmenu.php">terug naar het hoofdmenu</a>
    </body>
</html>
