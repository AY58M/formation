<h1>PHP : Exercices sur les boucles</h1>
<?php

// Exercices PHP - Les Boucles (Niveau Débutant)

/**
 * ! Erreurs courantes à éviter :

 * Boucle infinie : oublier d'incrémenter dans while
 * Mauvaise condition : < vs <=
 * Variables non initialisées avant la boucle
 * Oublier les accolades {}

 * ! Conseils de débogage :

 * Ajoutez des echo pour voir les valeurs des variables
 * Limitez le nombre d'itérations pendant les tests
 * Vérifiez toujours vos conditions d'arrêt

 * ! Bonnes pratiques :

 * Utilisez des noms de variables explicites ($compteur plutôt que $i)
 * Indentez correctement votre code
 * Commentez les boucles complexes
 */






/**
 * Exercice 1 : Compter jusqu'à 10
 * Objectif : Découvrir la boucle for de base
 * Utilisez une boucle for pour afficher les nombres de 1 à 10, chacun sur une ligne.
 */

for ($i = 1; $i <= 10; $i++) {

    echo "<h2>$i</h2>";
}

echo "<br>";




/**
 * Exercice 2 : Compte à rebours
 * Objectif : Boucle for décroissante
 * Créez un compte à rebours de 10 à 1, puis affichez "Décollage !".
 */

for ($i = 10; $i >= 1; $i--) {

    echo "<h2>$i</h2>";
}


echo "<h2>Décollage</h2>";
echo "<br>";



/**
 * Exercice 3 : Table de multiplication
 * Objectif : Utiliser une variable dans la boucle
 * Créez une variable $nombre (par exemple 7) et affichez sa table de multiplication de 1 à 10.
 */

$nombre = 7;

for ($i = 1; $i <= 10; $i++) {
    $resultat = $i * $nombre;
    echo "$i x $nombre = $resultat<br>";
}


/**
 * Exercice 4 : Les nombres pairs
 * Objectif : Boucle avec pas de 2
 * Affichez tous les nombres pairs de 0 à 20.
 */

for($i=0 ; $i<= 20 ; $i += 2) {


    echo "<h2>$i <br></h2>";
}

echo "<br>";


/**
 * Exercice 5 : Deviner un nombre
 * Objectif : Boucle while simple
 * Créez une variable $nombreSecret = 15 et une variable $tentative = 1.
 * Tant que la tentative n'est pas égale au nombre secret, affichez "Tentative X : ce n'est pas Y" et incrémentez la tentative.
 * Quand c'est trouvé, affichez "Bravo ! Trouvé en X tentatives".
 */

$nombreSecret = 15;

$tentative = 1;

while ($tentative < $nombreSecret  ) {

    echo "Tentative $tentative : Ce n'est pas $nombreSecret <br>"; $tentative++;
}

echo "Bravo : Trouvé en $tentative tentatives<br>";


/**
 * Exercice 6 : Accumulation
 * Objectif : Utiliser une variable d'accumulation
 * Calculez la somme de tous les nombres de 1 à 100 avec une boucle while.
 */


echo "<hr>";
echo "Exercice 6 : <br>";
$somme = 0;
$count = 1;
while ($count <= 100) {
    $somme += $count;
    $count++;
}
echo "La somme de tous les nombres de 1 à 100 = $somme <br>";


// * Exercices plus avancés :

/**
 * Exercice 7 : Nombres premiers (simple)
 * Objectif : Combiner boucles et conditions
 * Vérifiez si un nombre donné (par exemple 17) est premier en testant s'il est divisible par les nombres de 2 à la moitié du nombre.
 */

echo "<hr>";
echo "Exercice 7 : <br>";
$nombreATester = 17;
$estPremier = true; // on initialise un boolean pour indiquer que c'est un nombre premier

// ? Un nombre premier est un nombre qui n'a que 2 divisiurs (1 et lui meme) => on fais une boucle sur tous les autres nombres du nombre a tester sauf 1 (on initialise $i à 2) et lui meme (on teste la condition jusqu'au nombre -1)
for ($i = 2; $i <= ($nombreATester - 1); $i++) {
    if ($nombreATester % $i == 0) {
        $estPremier = false; // je change le boolean pour indiquer que ce n'est PAS un nombre premier
    }
}

if ($estPremier) {
    echo "Le nombre $nombreATester est premier<br>";
} else {
    echo "Le nombre $nombreATester n'est pas premier<br>";
}


/**
 * Exercice 8 : Pyramide d'étoiles
 * Objectif : Boucles imbriquées (bonus)
 * Créez une pyramide d'étoiles de hauteur 5.
 * 
 * Résultat attendu :
 * #
 * ##
 * ###
 * ####
 * #####
 */

echo "<hr>";
echo "Exercice 8 : <br>";
// ? Je dois déclarer 2 boucles. la premières pour le nombre de lignes (5 au total), la deuxième pour compter le nombre de # en référence à l'indice du tour de boucle ($o)
for ($i = 1; $i <= 5; $i++) {
    for ($o = 1; $o <= $i; $o++) {
        echo "#";
    }
    echo "<br>"; // le br fait passer a la ligne après avoir affiché x fois #
}




/**
 * Exercice 9 : FizzBuzz simplifié
 * Objectif : Révision complète
 * Pour les nombres de 1 à 30 :

 * Si divisible par 3 : affichez "Fizz"
 * Si divisible par 5 : affichez "Buzz"
 * Si divisible par 3 ET 5 : affichez "FizzBuzz"
 * Sinon : affichez le nombre
 */

// ! Pour cet exercice il existe un nombre incalculable de possibilités. On peut le faire avec des if, elseif, else, etc ...
echo "<hr>";
echo "Exercice 9 : <br>";
// ? démarrer une boucle de 30 tours
for ($i = 1; $i <= 30; $i++) {
    // ? si c'est divisible par 3, on affiche Fizz (!sans br)
    if ($i % 3 == 0) {
        echo "Fizz";
    }
    // ? si c'est divisible par 5, on affiche Buzz (!sans br). Cela veut dire que si jamais le nombre est divisible par 3 et par 5, on aura FizzBuzz d'affiché
    if ($i % 5 == 0) {
        echo "Buzz";
    }
    // ? si il n'est pas divisible par 3 et qu'il n'est pas divisible par 5 , on affiche simplement le nombre
    if (($i % 3 !== 0) && ($i % 5 !== 0)) {
        echo $i;
    }
    echo "<br>";
}
?>