<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
  <div class="kikkerlogo">
<a href="index.php">
<img src=kikker(1).png>
</a>


 </div>
<!-- <form> hier moet staan de form action enzo  -->
<div class="welkom">
<h1>Login hier</h1>
</div>
<form method="POST"> 
  <label for="VoorNaam">Voornaam:</label><br> <!-- veranderd naar VoorNaam was eerst vname-->
  <input type="text" id="fname" name="fname"><br>
<br>
  <label for="lname">Achternaam:</label><br>
  <input type="text" id="lname" name="lname"> 
<br>
<br>
  <input type="submit" value="Submit">
</form>

</body>
</html>

<?php 
session_start();

include "connect.php";
if(isset($_POST["login"])) {
  if($_POST["VoorNaam"]=="" or $_POST["Achternaam"]==""){
    echo"<center><h1>Voornaam of Achternaam mag niet leeg zijn</h1></center>";
  }else{
    $VoorNaam=trim($_POST["voornaam"]);
    $Achternaam=strip_tags(trim($_POST["achternaam"]));
    $query=$db->prepare("SELECT * FROM login WHERE VoorNaam=? AND Achternaam=?");
    $query->execute(array($VoorNaam,$Achternaam));
    $control=$query->fetch(PDO::FETCH_OBJ);
    if($control>0) {
      $_SESSION["VoorNaam"]=$VoorNaam;
      header("hoofdpagina.php");
    }
    echo "<center><h1>Verkeerde naam of achternaam!</h1></center>";
  }
}

