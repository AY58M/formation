<?php
 echo "PHP : Exercices boucles - break/continue\n";  //  \n -> fait un saut à la ligne

//  echo "test";

//  commande à faire dans le terminal
// *php nom_fichier.php
// *clear -> éffacer ce qui est affiché dans le terminal
// *ctrl = c -> permet de sortir du script 

// $nom = readline ("Entrez votre nom :") // readline permet de demander une information à l'utilisateur
// echo "Bonjour $nom !\n" ;
/**
 * ! Conseils pour éviter les erreurs :
 * ? 1. Pensez à la logique :

 * break = "J'arrête tout"
 * continue = "Je passe au suivant"

 * ? 2. Attention aux boucles infinies :
 * DANGER : boucle infinie si on oublie break
 * while (true) {
 *     Il FAUT un break quelque part !
 * }
 
 * ? 3. Testez avec des echo :
 * for ($i = 1; $i <= 5; $i++) {
 *   echo "Tour $i\n"; // Pour voir où on en est
 *   if ($i == 3) {
 *       break;
 *   }
 * }
 */

/**
 * Exercice 1 : Arrêter à 7
 * Objectif : Découvrir break
 * Comptez de 1 à 15, mais arrêtez la boucle dès que vous arrivez à 7.
 */

echo "Exercice 1 : \n" ;

for ($i=1; $i<=15; $i++) {
    echo "tour n° $i.\n";
    if ($i==7) {
        break;
    }
    
}


/**
 * Exercice 2 : Ignorer le 5
 * Objectif : Découvrir continue
 * Affichez les nombres de 1 à 10, mais sautez le nombre 5.
 */

echo "Exercice 2 : \n" ;

for ($i=1; $i<=10; $i++) {
    if ($i==5) {
        continue;
    }
        echo "tour n° $i.\n";

}


/**
 * Exercice 3 : Chercher le nombre 15
 * Objectif : Break dans une recherche
 * Comptez de 10 à 20. Dès que vous trouvez 15, affichez "Trouvé !" et arrêtez.
 */

echo "Exercice 3 : \n" ;

for ($i=10; $i<=20; $i++) {
    echo "tour n° $i.\n";
    if ($i==15) {
        echo "Trouvé !";
          break;
    }
    
}






/**
 * Exercice 4 : Ignorer les nombres pairs
 * Objectif : Continue avec condition
 * Affichez les nombres de 1 à 12, mais ignorez tous les nombres pairs.
 */

echo "Exercice 4 : \n" ;

for ($i=1; $i<=12; $i++) {
    if ($i %2 == 0) {
        continue;
    }
        echo $i. "\n";

}




/**
 * Exercice 5 : Trouver le mot de passe
 * Objectif : break avec while et readline
 * Demandez le mot de passe jusqu'à ce que l'utilisateur tape "abc123".
 */

echo "Exercice 5 : \n" ;

while (true) {
    $mot_de_passe = readline("Entrez le mot de passe : ");

    if ($mot_de_passe === "abc123") {
        echo "Mot de passe correct.\n";
        break;
    } else {
        echo "Mot de passe incorrect. Réessayez.\n";
    }
}






/**
 * Exercice 6 : Menu simple
 * Objectif : break pour quitter un menu
 * Menu qui tourne en boucle jusqu'à ce qu'on tape "3".
 */

// while (true) { // ! attention a la boucle infinie, il faut la casser
//     echo "1. Bonjour\n";
//     echo "2. Au revoir\n";
//     echo "3. Quitter\n";

//     // * Demander le choix avec readline, afficher le un message en fonction du choix (1,2 ou 3) et sortir de la boucle
// }


echo "Exercice 6 : \n" ;



while (true) {

    $choix = readline("Entrez votre choix : ");

   if ($choix == "3") {
        echo "Fermeture du programme.\n";
        break;
    } else {
        echo "Choix invalide. Veuillez réessayer.\n";
    }
}




?>