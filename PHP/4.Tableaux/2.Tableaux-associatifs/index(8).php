<h1>PHP : Les tableaux - les tableaux associatifs</h1>
<?php

/**
 * Affiche un tableau dans un meilleur format en HTML
 *
 * @param  mixed $array
 * @return void
 */
function arrayFormat($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

/**
 * C’est quoi un tableau associatif ?

 * C’est comme un tableau indexé, sauf que les “numéros” (index) sont remplacés par des mots qu’on appelle clés.
 * Chaque clé correspond à une valeur.
 */

$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 25
];

// acceder à une valeur
echo $personne["nom"].'<br>';    // Affiche "Dupont"
echo $personne["prenom"].'<br>'; // Affiche "Jean"

// Changer une valeur
$personne["age"] = 30; // Change l'âge à 30

// Ajouter une valeur
$personne["ville"] = "Paris"; // Ajoute une nouvelle entrée

// On peut créer des tableaux multidimensionnel (ajouter un tableau dans un tableau)
$personne["hobbys"] = ["Football", "Rugby", "Course à pied"];
arrayFormat($personne);

// * Autre exemple
$utilisateur = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "contacts" => [
        "email" => "jean.dupont@example.com",
        "tel" => ["06 12 34 56 78", "07 98 76 54 32"]
    ],
    "hobbies" => ["Football", "Lecture", "Cuisine"]
];

echo $utilisateur["contacts"]["tel"][0] // afficher le premier numéro de tel de l'utilisateur

/**
 * RESUME
 * Tableau associatif = liste avec des mots comme index.
 * Pratique pour stocker des infos nommées.
 * Même manipulation qu’un tableau indexé, mais on utilise des clés au lieu de chiffres.
 */
?>