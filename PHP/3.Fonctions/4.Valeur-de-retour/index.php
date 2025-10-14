<h1>PHP : Fonctions - Valeur de retour</h1>

<?php

// une fonction qui affiche directement qqchose
function addition($a, $b) {
    
    echo $a +$b."<br>" ; 
}

addition (10, 15); // affiche 25


//  une fonction qui retourne quelque chose
function addition2 ($a, $b) {

        return $a +$b."<br>" ; 

}

addition2(10,30) ; // n'afiche rien !
$resultat = addition2(10,30) ; // il faut stocker la valeur de retour dans une variable
echo $resultat ;

// *rappel !!!
// * echo -> affiche directement un résultat
// * returtn -> retourne un résultat, mais na l'affiche pas !!!
// ! return se place toujours dans une fonction


