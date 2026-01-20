<h1>PHP : exercices sur les tableaux</h1>
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
 * Chapitre 1 : Tableaux indexés

 * 1. Créer un tableau contenant 5 prénoms de votre choix, puis afficher le 3ème prénom.
 * 2. Ajouter un prénom à la fin du tableau, puis afficher tous les prénoms avec print_r().
 */
$prenoms = array("Alice", "Benoît", "Carla", "David", "Emma");
echo $prenoms[2]."<br>";

$prenoms[] = "Fanny" ;
arrayFormat($prenoms );

/**
 * Chapitre 2 : Tableaux associatifs

 * 3. Créer un tableau associatif $voiture avec les clés : marque, modele, annee. Afficher uniquement la marque.
 * 4. Ajouter une nouvelle clé couleur dans le tableau $voiture puis afficher tout le tableau avec print_r().
 */



/**
 * Chapitre 3 : Boucles sur tableaux

 * 5. Avec un tableau indexé de fruits, afficher tous les fruits avec une boucle foreach.
 * 6. Avec un tableau associatif d’une personne (nom, prenom, age), afficher chaque clé et sa valeur sous la forme :
 * nom : Dupont
 * prenom : Jean
 * age : 25
 */

$fruits = ["Pomme", "Banane", "Orange", "Kiwi"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";

$personne = [
    'nom' => 'Dupont'. "<br>",
    'prenom' => 'Jean'. "<br>",
    'age' => 25 . "<br>"
];

foreach ($personne as $cle => $valeur) {
    echo "$cle : $valeur\n";
}

echo "<br>";



/**
 * Chapitre 4 : Fonctions sur tableaux

 * 7. Créer un tableau de 4 nombres. Afficher le nombre d’éléments avec count().
 * 8. Ajouter un élément au début et à la fin du tableau avec array_unshift() et array_push(), puis afficher le tableau.
 * 9. Vérifier avec in_array() si "Pomme" est présent dans un tableau de fruits 
 
 * 10. Créez un tableau avec 5 fruits.
 * Cherchez l’index de "Cerise" avec array_search().
 * Supprimez-le avec array_splice().
 * Affichez le tableau final.
 */

$tableau = [76, 88, 43, 23];

echo "Nombre d'éléments dans le tableau : " . count($tableau);

array_unshift($tableau, 5);  

array_push($tableau, 50);    

print_r($tableau);

?>


