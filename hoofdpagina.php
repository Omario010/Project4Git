<?php
if(!isset($_SESSION["VoorNaam"])){
    header("location:loginForm1.php");

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <center><h1>
            Welkom<?php echo $_SESSION["VoorNaam"];?><br>
            Login sucess<br><br>

        </h1></center>
        <h2>Anime</h2>
        <a href="Project4Menu.php">	Anime</a><br/>
</body>
</html>