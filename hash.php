<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
//Aanmaken
$gekregenWW = "pass123";
$gehashed = password_hash($gekregenWW, null);
echo $gehashed;
echo "<br>";


//inloggen
$inlogWW = "pass123";
//Ophalen uit db
$oudeHash = $gehashed;
$isCorrect = password_verify($inlogWW, $oudeHash);
if($isCorrect){
    echo "goed";
}
else{
    echo "fout";
}
