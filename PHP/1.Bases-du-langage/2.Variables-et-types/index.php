<h1>Variables et types</h1>

<?php
$nom = "El Fellah";
$prenom = "Mohammed";
$age = 50;
$ville = "Arles";


// echo $prenom;
// echo "<br>";
// echo $nom;
// echo "<br>";
// echo $age;
// echo "<br>";
// echo $ville;
// echo "<br>";

// $ville = "Marseille"; // je change la valeur de la variable $ville
// echo $ville;
// echo "<br>";
// echo $amiral; // ! erreur : $amiral n'est pas défini


/**
 * 
 * Régles pour nomer une variable en php:
 * - commence toujours par $
 * - le nom de la variable ne doit jamais commencer par un chiffre ou une lettre majuscule
 * - pas d'espace ni de caractères spéciaux, utiliser le Camelcase (c$connectionBaseDeDonnee)
 * - respecter la casse (orthorgaphe)
 */

/**
 * Les principaux types de données
 * | Type    | Exemple          | Description                |
 * | ------- | ---------------- | -------------------------- |
 * | string  | `"Bonjour"`      | Chaîne de texte            |
 * | integer | `42`             | Nombre entier              |
 * | float   | `3.14`           | Nombre à virgule           |
 * | boolean | `true` / `false` | Vrai ou faux               |
 * | array   | `[1, 2, 3]`      | Liste (on verra plus tard) |
 * | null    | `null`           | Aucune valeur              |
 */

$nomEleve = "Benoit Jardin";
$ageEleve = 17;
$tailleEleve = 164.42;
$estInscrit = true;
$carteEtudiant = null;


/**
 * La concaténation:
 * permet d'afficher plusieurs variables dans un seul echo.
 * il existe 2 méthodes.
 */

// echo "Nom élève : " .$nomEleve. " age :" .$ageEleve . "<br>";

// echo "L'élève s'apelle $nomEleve, il a $ageEleve ans";

/**
 * Modification de variables
 */

$chiffre = 0;
echo $chiffre;
echo "<br>";

// $chiffre= 0 + 1;
$chiffre = $chiffre  + 1;
echo $chiffre;
echo "<br>" ;
$chiffre = $chiffre  + 1;
echo $chiffre;
echo "<br>" ;
$chiffre = $chiffre  + 1;
echo $chiffre;
echo "<br>" ;
$chiffre += 1;
echo $chiffre;
echo "<br>" ;
$chiffre  += 1;
echo $chiffre;
echo "<br>" ;

echo "<br>" ;

$chiffre2 = 5;
echo $chiffre2;
echo "<br>";

$chiffre2 = $chiffre2 -1;
echo $chiffre2;
echo "<br>" ;
$chiffre2 = $chiffre2 -1;
echo $chiffre2;
echo "<br>" ;
$chiffre2 = $chiffre2 -1;
echo $chiffre2;
echo "<br>" ;
$chiffre2 = $chiffre2 -1;
echo $chiffre2;
echo "<br>" ;
$chiffre2 = $chiffre2 -1;
echo $chiffre2;
echo "<br>" ;


