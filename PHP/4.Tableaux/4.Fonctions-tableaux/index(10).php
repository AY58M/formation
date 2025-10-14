<h1>PHP : Les tableaux - les principales fonctions sur les tableaux</h1>
<?php

/**
 * count()
 * Compter le nombre d’éléments dans un tableau.
 */

$fruits = ["Pomme", "Banane", "Cerise"];
echo count($fruits); // Affiche 3

/**
 * array_push()
 * Ajouter un ou plusieurs éléments à la fin.
 */

array_push($fruits, "Orange", "Kiwi");

/**
 * array_pop()
 * Retirer le dernier élément du tableau.
 */

array_pop($fruits); // Supprime "Cerise"

/**
 * array_shift()
 * Retirer le premier élément (et réindexe les autres).
 */

array_shift($fruits); // Supprime "Pomme"

/**
 * array_unshift()
 * Ajouter un ou plusieurs éléments au début.
 */

array_unshift($fruits, "Fraise");

/**
 * in_array()
 * Vérifier si une valeur existe dans le tableau.
 */

if (in_array("Pomme", $fruits)) {
    echo "Pomme trouvée !";
}


// ! A connaitre : manipulation pour chercher un élément dans un tableau, et le supprimer.

/**
 * array_search()
 * Trouver l'index d'un élément dans un tableau
 */

$fruits = ["Pomme", "Banane", "Cerise", "Orange"];
$index = array_search("Cerise", $fruits); // array_search renvoie l'index ou false si introuvable

/**
 * array_splice()
 * Supprimer un élément dans un tableau grâce à son index
 */

if ($index !== false) {
    array_splice($fruits, $index, 1);
}

?>