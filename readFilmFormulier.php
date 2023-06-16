<!doctype html>
<html>
    <!--jasper-->
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
        <title>read film formulier</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <h1>read film formulier</h1>
        <p>Alle gegevens van alle films: </p>
        <?php
            require "Film.php";
            $film = new Film();
            $film->lijst();
        ?>
    </body>
</html>
