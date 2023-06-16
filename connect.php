<?php
// connect .php
// maakt verbinding met de database 'inlog
$servername = "localhost";
$dbname = "project4";
$username = "omario010";
$password = "ViezeAap1!";
try
{

$conn = new PDO(

"mysql:host=$servername;
dbname=$dbname",
$username, $password

);
// echo "Connectie gelukt <br/>";
}
catch (PDOExeption $e)
{
echo "Connectie mislukt <br/>".$e->getMessage ();
}
?>