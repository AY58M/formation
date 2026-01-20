<h2>Exercice PHP – Fonction</h2>
<h3>Exercice 0 : Initiation fonction</h3>

<h4>calculer le périmètre d’un rectangle :</h4>

<?php
function calculerPerimetreRectangle($longueur, $largeur)
{


    $perimetre = 2 * ($longueur + $largeur);
    return $perimetre;
}

$longueur = 6;
$largeur = 2;
echo "Le périmètre du rectangle est : " . calculerPerimetreRectangle($longueur, $largeur) . " cm ";
?>

<h4>calculer le triple d’un nombre :</h4>
<?php

function calculerTripleNombre($nombre)
{

    $result = 3 * ($nombre);
    return $result;
}

$nombre = 7;
echo "Le triple de $nombre est : " . calculerTripleNombre($nombre);
?>

<h4>calculer le périmètre d’un cercle :</h4>

<?php

function calculerPerimetreCercle($rayon)
{

    $perimetre = 2 * 3.14 * ($rayon);
    return $perimetre;
}
$rayon = 5;
echo "Le périmetre du cercle est : " . calculerPerimetreCercle($rayon) . " cm";

?>

<h3>Exercice 1 : Fonction pour calculer la somme de deux nombres</h3>
<h4>Somme de $a et $b</h4>
<?php

function somme ($a, $b) {

    $somme = ($a + $b);
    return $somme ;
}

$a = 10;
$b = 20;
echo "La somme de $a et de $b est : " .somme($a, $b); 

?>

<h3>Exercice 2: Vérifier si un nombre est pair ou impair</h3>
<h4>True ou False</h4>
<?php
 function estPair ($nombre) {
        return $nombre % 2 == 0;

 }

$nombre1 = 7;
$nombre2 = 10;
echo "Le nombre $nombre1 est pair : " .(estPair($nombre1) ? "True" : "False");
echo "<br>";
echo "Le nombre $nombre2 est pair : " .(estPair($nombre2) ? "True" : "False");

 ?>

 <h3>Exercice 3: Fonction qui retourne le plus grand nombre d’un tableau</h3>
<?php

function maxTableau($tab) {


    $max = $tab[0];

    foreach ($tab as $val) {
        if ($val > $max) {
            $max = $val;
        }
    }

    return $max;
}

$monTableau = [10, 25, 8, 36, 12];
$resultat = maxTableau($monTableau);

echo "Le plus grand nombre du tableau est : " . $resultat;

?>
<h3>Exercice 4: Fonction pour vérifier si une chaîne contient un mot spécifique</h3>

<?php
function contientMot($phrase, $mot) {

    return strpos($phrase, $mot) !== false;
}

$phrase = "Bonjour tout le monde";
$mot = "monde";

if (contientMot($phrase, $mot)) {
    echo "Le mot '$mot' est présent dans la phrase.";
} else {
    echo "Le mot '$mot' n'est pas présent dans la phrase.";
}
?>

<h3>Exercice 5: Fonction pour inverser une chaîne</h3>

<?php
function inverser($texte) {
    return strrev($texte);
}

$texte = "PHP";
$texteInverse = inverser($texte);

echo "Texte original : $texte\n";
echo "Texte inversé : $texteInverse\n";
?>

<h3>Exercice 6: Fonction pour convertir une température</h3>

<?php
function convertirTemperature($temp, $unite) {
    if ($unite == "F") {
        // Convertir Fahrenheit en Celsius
        $celsius = ($temp - 32) * 5 / 9;
        return round($celsius, 2) . " °C";
    } elseif ($unite == "C") {
        // Convertir Celsius en Fahrenheit
        $fahrenheit = ($temp * 9 / 5) + 32;
        return round($fahrenheit, 2) . " °F";
    } else {
        return "Unité invalide. Utilisez 'C' ou 'F'.";
    }
}

echo "100°F = " . convertirTemperature(100, "F") . "<br>";

echo "37°C = " . convertirTemperature(37, "C") . "\n";
?>

<h3>Exercice 7: Fonction qui calcule le prix TTC</h3>

<?php
function calculerPrixTTC($prixHT) {
    $tauxTVA = 0.20;
    $prixTTC = $prixHT * (1 + $tauxTVA);
    return $prixTTC;
}

$prixHT = 100;
echo "Prix TTC : " . calculerPrixTTC($prixHT) . " €";
?>

<h3>Exercice 8: Fonction avec arguments par défaut</h3>

<?php
function saluer($nom, $langue = "fr") {
    switch ($langue) {
        case "fr":
            echo "Bonjour, $nom";
            break;
        case "en":
            echo "Hello, $nom";
            break;
        case "es":
            echo "Hola, $nom";
            break;
        default:
            echo "Langue non prise en charge.";
    }
}

saluer("Alice");
echo "<br>";   
saluer("Bob", "en");
echo "<br>";
saluer("Carlos", "es");   


