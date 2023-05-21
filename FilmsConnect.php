<?php

$servername = "localhost";
$dbname 	= "project4";
$username 	= "root";
$password 	= "";

try
{
    $conn = new PDO("mysql:host=$servername;
						dbname=$dbname",
        $username, $password);
    // echo "Connectie gelukt <br/>";

}
catch(PDOException $e)
{
    echo "Connectie mislukt: ". $e->getMessage();
}
