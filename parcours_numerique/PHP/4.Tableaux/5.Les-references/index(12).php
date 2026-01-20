<h1>PHP : Les tableaux - copie par références</h1>

<?php

// copie par valeur :
// ---------------------

$nombre1 = 10;
$nombre2 = $nombre1; // copie par valeur

$nombre1 = 20;

echo "nombre 1 : $nombre1<br>";
echo "nombre 2 : $nombre2<br>";

$tableau1 = ["Jean", "Henry", "Picolo"];
$tableau2 = $tableau1; // copie par valeur également


echo "Tableau 1: <br>";
echo "<pre>";
print_r($tableau1);
echo "</pre>";


// copie par référence (&)
// ---------------------------

// ici le tableau 3 est lié avec le tableau 1
$tableau3 = &$tableau1;

array_pop($tableau3);

echo "Tableau 3: <br>";
echo "<pre>";
print_r($tableau3);
echo "</pre>";

echo "Tableau 1: <br>";
echo "<pre>";
print_r($tableau1);
echo "</pre>";

// exemple dans les fonctions
// -------------------------------

// ! le symbole & est indispensable pour manipuler un tableau existant. Sinon la fonction va créer un nouveau tableau 
function ajouterFruit(&$tableauFruits, $fruit) {

    
    // echo "nom du fruit a ajouter : $fruit";
    
    array_push($tableauFruits, $fruit);
    echo "Fruit ($fruit) ajouté à la liste !\n";
    
    // echo "<pre>";
    // print_r($tableauFruits);
    // echo "</pre>";
}

$tableauInitial = ["Pomme"];

$nomFruit = readline("Fruit : ");
ajouterFruit($tableauInitial, $nomFruit);

// ! $tableauInitial est passé dans la fonction, mais grace au symbole & DANS LA FONCTION, il récupère le vrai tableau au lieu d'en créer un nouveau.
$nomFruit = readline("Fruit suivant : ");
ajouterFruit($tableauInitial, $nomFruit);

    echo "<pre>";
    print_r($tableauInitial); 
    echo "</pre>";