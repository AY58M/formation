<h1>PHP : Les tableaux - les boucles sur les tableaux</h1>
<?php

/**
 * Pourquoi boucler sur un tableau ?

 * Pour parcourir chaque élément sans connaître à l’avance combien il y en a.
 * Éviter d’écrire echo $tableau[0]; echo $tableau[1]; ... à la main.
 */

// la boucle foreach lit directement les éléments du tableau, sans se soucier des index.
$fruits = ["Pomme", "Banane", "Cerise"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// la boucle foreach avec les clés et valeurs
$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 25
];

foreach ($personne as $cle => $valeur) {
    echo $cle . " : " . $valeur . "<br>";
}

// la boucle for avec des tableaux indexés
$fruits = ["Pomme", "Banane", "Cerise"];

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

/**
 * RESUME
 * 
 * foreach : pour parcourir facilement tous les éléments (indexé ou associatif).
 * foreach avec clé : pour lire les noms des clés + valeurs.
 * for : pour travailler directement avec les numéros d’index.
 */


// entrainement 1 :
// -----------------

echo "<hr>";

$voiture = [
    "model" => "Nissan",
    "annee" => 2002,
    "couleur" => "rouge"
];

foreach ($voiture as $key => $value) {
    echo "$key : $value<br>";
}

// entrainement 2 :
// -----------------

$voitures = [
    [
        "model" => "Nissan",
        "annee" => 2002,
        "couleur" => "rouge"
    ],
    [
        "model" => "Opel",
        "annee" => 2005,
        "couleur" => "blanc"
    ],
    [
        "model" => "Ford",
        "annee" => 2004,
        "couleur" => "jaune"
    ],
];

foreach ($voitures as $key => $element) {
    echo "Voiture $key :<br>";
    // formaterTableau($element);
    foreach ($element as $key => $value) {
        echo "$key : $value<br>";
    }
}


?>