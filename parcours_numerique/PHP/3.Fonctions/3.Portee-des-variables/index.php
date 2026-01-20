<h1>PHP : Fonctions - Portée des variables</h1>

<?php

error_reporting(E_ALL);
 ini_set("display_errors", 1); 

//  une variable locale est une variable qui est déclarée dans une fonction

function test() {
    $message = "Bonjour" ;
    echo $message. "<br>" ;
}

test() ;
// echo $message ; // !undefined $message
// undefined $message

// une variable globale est une variable qui est déclarée en dehors d'une fonction
$message = "Bonjour" ;
function test2 () {
    // on peut utiliser une variable globale en la redéclarant avec le mot clé globale
    global $message ;
        echo $message. "<br>" ;

}

$message = "Bonjour" ;
function test3 () {

    $message= "Hello world !";
        echo $message. "<br>" ;
}

test3();
echo $message ."<br>";


$ville = "Arles" ;
function afficherVille () {
    global $ville ;
    echo  $ville."<br>" ;

}

$ville = "Arles" ;
echo $ville ;


?>