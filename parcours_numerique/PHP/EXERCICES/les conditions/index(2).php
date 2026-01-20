<?php

// Exercices PHP - Les Conditions (Niveau Débutant)
// ! N'oubliez pas de tester les exercices avec différentes valeurs !

/**
 ** Erreurs courantes à éviter :

 * Oublier le $ devant les variables
 * Confondre = (assignation) et == (comparaison)
 * Oublier les accolades {} dans les conditions
 * Mal placer les ;
 */


 
/**
 * Exercice 1 :
 * Créez une variable $motDePasse avec la valeur "secret123".
 * 
 * Si le mot de passe est correct, affichez "Accès autorisé", sinon "Accès refusé".
 */

$motDePasse = "secret123";

if ($motDePasse == "secret124") {

    echo "Accès autorisé";
}

else {

    echo "Accès refusé";
}

echo "<br>";




/**
 * Exercice 2 :
 * Créez une variable $nombre avec une valeur de votre choix.
 * 
 * Vérifiez si le nombre est pair ou impair et affichez le résultat.
 * 
 * Indice : Un nombre est pair si $nombre % 2 == 0
 */

$nombre = 12;
if ($nombre % 2 ==0) {

    echo "Nombre paire";
}

else {
    echo "Nombre impaire";
}

echo "<br>";


/**
 * Exercice 3 :
 * Objectif : Utiliser plusieurs conditions avec l'opérateur || (OU)
 * 
 * Créez une variable $jour avec un jour de la semaine (ex: "samedi").
 * 
 * Si c'est samedi OU dimanche, affichez "C'est le week-end !", sinon "C'est un jour de semaine".
 */

$jour = "lundi";

if ($jour == "samedi" || $jour == "dimanche") {

    echo "C'est le week-end";
}

else {

    echo "C'est un jour de la semaine";
}

echo "<br>";





/**
 * Exercice 4 :
 * Objectif : Combiner plusieurs conditions avec && (ET)
 * 
 * Créez deux variables $nom et $age.
 * 
 * Pour qu'une inscription soit valide :

 * Le nom ne doit pas être vide (utilisez $nom != "")
 * L'âge doit être >= 16

 * Affichez "Inscription valide" ou "Inscription refusée" selon le cas.
 */


$nom = "dupont";
$age = 15;

if ($nom!="" && $age >= 16) {
    echo "Inscription validé";
}
else {
    echo "Inscription refusée";
}

echo "<br>";



/**
 * Exercice 5 :
 * Créez une variable $temperature (en Celsius).

 * Si < 0 : "Il gèle !"
 * 
 * Si entre 0 et 15 : "Il fait froid"
 * 
 * Si entre 16 et 25 : "Température agréable"
 * 
 * Si > 25 : "Il fait chaud"
 */

$temperature = 0 ;

if ($temperature < 0) {
    echo "Il gèle" ;
}

elseif ( $temperature>=0 && $temperature<=16) {
    echo "Il fait froid";
}

elseif ( $temperature>=16 && $temperature<=25) {

    echo "Température agréable";
}

elseif ($temperature>25) {
    echo "Il fait chaud";
}

echo "<br>";


/**
 * Exercie 6 :
 * Créez trois variables : $nombre1, $nombre2, et $operation.
 * 
 * L'opération peut être "+", "-", "*" ou "/".
 * 
 * Affichez le résultat selon l'opération choisie.
 */

$nombre1 = 6;

$nombre2 = 8;

$operation = "/" ;



if ( $operation == "+" ) {
$resultat =$nombre1+$nombre2;

    echo "le resultat est $resultat ";

}

elseif ($operation == "-" ) {
    $resultat = $nombre1-$nombre2;
        echo "le resultat est $resultat ";
}

elseif ($operation == "*") {

    $resultat = $nombre1*$nombre2;

        echo "le resultat est $resultat ";

}

elseif ( $operation == "/" ) {
    $resultat = $nombre1/$nombre2;
    echo "le resultat est $resultat ";

}
