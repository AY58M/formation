<?php

/**
 * Exercice 1 — Ma première variable
 * Crée une variable appelée $prenom et mets-y ton prénom.
 * Affiche la phrase suivante avec echo :
 * "Bonjour, je m'appelle [ton prénom]"
 */

$prenom = "Mohammed";
echo "Bonjour je m'apelle $prenom";
echo "<br>";
echo "<br>";



/**
 * Exercice 2 — Calcul simple
 * Crée deux variables $a et $b avec les valeurs 5 et 3.
 * Crée une troisième variable $somme qui additionne $a et $b.
 * Affiche :
 * "Le résultat de l’addition est : 8"
 */


$a = "5";
$b = "3";
$somme = $a + $b;

echo "le résultat de l'addition et $somme ";
echo "<br>";
echo "<br>";



/**
 * Exercice 3 — Changer la valeur
 * Crée une variable $message qui contient "Bonjour".
 * Affiche-la.
 * Change ensuite sa valeur en "Au revoir", puis affiche-la à nouveau.
 */


$message = "Bonjour";
echo $message;
echo "<br>";
$message = "Au revoir";
echo $message;
echo "<br>";
echo "<br>";




/**
 * Exercice 4 — Types de données
 * Crée 4 variables différentes :
 *   $nom (texte),
 *   $age (nombre entier),
 *   $taille (nombre à virgule),
 *   $estEtudiant (booléen).
 */

$nom = "Mohammed";
$age = 50;
$taille = 176.5;
$estEtudiant = true;

echo "Nom : " . $nom . "<br>";
echo "Age : $age " . "<br>";
echo "Taille : $taille";
echo "<br>";
echo "Etudiant : $estEtudiant";
echo "<br>";
echo "<br>";





/**
 * Exercice 5 — Concatenation simple
 * Crée deux variables $ville et $pays.
 * Affiche une phrase comme :
 * "Je vis à Paris, en France."
 * (pas besoin de mettre une virgule, sauf si tu veux les initier à la * concaténation avancée avec . ou les guillemets doubles)
 */

$ville =  "Arles";
$pays = "France";
echo "j'habite à $ville, en $pays.";
echo "<br>";
echo "<br>";



/**
 * Exercice 6 — Décompte de 5 à 0
 * Crée une variable chiffre qui a la valeur 5
 * Afficher sa valeur
 * Ensuite , modifier sa valeur en retirant 1 et réafficher sa valeur jusqu'a arriver à 0 (sans boucles)
 */

$chiffre = 5;
echo $chiffre;
echo "<br>";

$chiffre = $chiffre - 1;
echo $chiffre;
echo "<br>";

$chiffre = $chiffre - 1;
echo $chiffre;
echo "<br>";

$chiffre = $chiffre - 1;
echo $chiffre;
echo "<br>";

$chiffre = $chiffre - 1;
echo $chiffre;
echo "<br>";

$chiffre = $chiffre - 1;
echo $chiffre;
echo "<br>";
