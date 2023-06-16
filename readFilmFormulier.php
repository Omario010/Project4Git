<!doctype html>
<html>
    <!--jasper-->
    <head>
   
        <title>read film formulier</title>
        <link rel="stylesheet" href="styler.css">
    </head>
    <body>
        <h1>lezen film formulier</h1>
        <p>Alle gegevens van alle films: </p>
        <?php
            require "Film.php";
            $film = new Film();
            $film->lijst();
        ?>
    </body>
</html>
