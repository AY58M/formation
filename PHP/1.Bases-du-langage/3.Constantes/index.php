<?php
$baseUrl = "http: //formation.arles/PHP/1.Bases-du-langage/3.Constantes/index.php";



// Une constante s'écrit toujours en majuscule

define ( "PSEUDO", "Miiisu");
define("BASE_URL", $baseUrl);
$baseUrl = "Pas d'url"; // Est autorisé car c'est une variable

// PSEUDO = "Albert"; // ! Impossible de modifier une constante => Fatal error



echo PSEUDO;
echo "<br>";
echo BASE_URL;





?>