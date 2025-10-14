<?php

function titreExercice($numéro)
{
    echo "** Exercice $numéro **\n\n";
}

// ######################## Exercice avec readLine et découverte de certaines fonctions de base de PHP ######################################

/**
 * Exercice 1
 * Créez un programme qui demande le prénom de l'utilisateur et l'affiche en majuscules.
 * Fonction à découvrir : strtoupper()
 */

// titreExercice (1);
// $prenom = readline ("Entrez votre prénom :") ;
// $prenomEnMajuscule = strtoupper($prenom) ;
// echo $prenomEnMajuscule. "\n" ;
    



/**
 * Exercice 2
 * Créez un programme qui demande une phrase à l'utilisateur et affiche combien de caractères elle contient.
 * Fonction à découvrir : strlen()
 */

// titreExercice (2);
// $phrase = readline ("Entrez une phrase :") ;
// $nombreCaracters = strlen($phrase) ;
// echo $nombreCaracters. "\n" ;



/**
 * Exercice 3
 * Créez un programme qui demande l'âge de l'utilisateur et calcule dans combien d'années il aura 100 ans.
 */

// titreExercice (3);
// $age = readline ("Entrez votre age :") ; 
// $combienReste = 100 - $age ;
// echo "Vous auriez 100 ans dans $combienReste". "\n" ;




/**
 * Exercice 4
 * Créez un programme qui demande un mot à l'utilisateur et l'affiche à l'envers.
 * Fonction à découvrir : strrev()
 */

// titreExercice (4);
// $mot = readline ("Entrez un mot :") ;
// $motAlenvers = strrev($mot) ;
// echo $motAlenvers. "\n" ;



/**
 * Exercice 5
 * Créez un programme qui demande deux nombres et affiche le plus grand des deux.
 */



// titreExercice (5);
// function lePlusGrand () {
// $nombre1 = readline("Entrez un premier nombre : ");
// $nombre2 = readline("Entrez un deuxieme nombre : ");

// if ($nombre1 > $nombre2) {
//     echo "le plus grand nombre est : $nombre1\n";
// }
// elseif ($nombre2 > $nombre1) {
//        echo "le plus grand nombre est : $nombre2\n" ;

// }

// else {
//     echo "les deux nombres sont égaux\n";
// }

// }

// lePlusGrand();



/**
 * Exercice 6
 * Créez un programme qui demande le nom de l'utilisateur et vérifie s'il contient la lettre "a".
 * Fonction à découvrir : strpos()
 */


// titreExercice(6);
// $NomUtilisateur = readline( "Entrez votre nom d'utilisateur :" ) ;
// if (strpos ($NomUtilisateur, 'a') ) {
//     echo "Le nom contient la lettre 'a'.\n";
// } else {
//     echo "Le nom ne contient pas la lettre 'a'.\n";
// }


/**
 * Exercice 7
 * Créez un programme qui demande un nombre et affiche sa table de multiplication de 1 à 5.
 */

// titreExercice(7);

// $nombre = readline ("Entrez un nombre :") ;

// for ($i = 1; $i <= 5; $i++) {
//     $resultat = $nombre * $i;
//     echo "$nombre x $i = $resultat\n";
// }


/**
 * Exercice 8
 * Créez un programme qui compte à rebours de 10 à 1, puis affiche "Bonne année !".
 * Fonction à découvrir : sleep()
 */


// titreExercice(8) ;

// for ($i = 10; $i >= 1; $i--) {

//         echo "$i\n";

// }

//         echo "Bonne année\n" ;



/**
 * Exercice 9
 * Créez un programme qui demande une phrase et remplace tous les "e" par des "3".
 * Fonction à découvrir : str_replace()
 */

// titreExercice (9);

// $phrase = readline ("Ecrivez une phrase :" ) ;

// $phraseModifiee = str_replace(['e', 'è'] , '3', $phrase);

// echo "la phrase modifiée :" . "$phraseModifiee\n" ; 





/**
 * Exercice 10
 * Créez un programme qui simule un dé : il affiche un nombre aléatoire entre 1 et 6.
 * Fonction à découvrir : rand()
 * 
 */

// titreExercice (10);

// echo "le nombre aléatoire est : ". rand (1,6 )."\n" ;


titreExercice(10);
$nombreRandom = rand(1, 6);
echo "Le nombre aléatoire entre 1 et 6 est : $nombreRandom\n";
