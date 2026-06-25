<?php

echo "1. A partir de deux entiers donnés, écrire un script qui vérifie si l’un deux est égal à 30 ou
que la somme des deux est égale à 30.<br><br>";

$nombre1 = 30;
$nombre2 = 0;

if ($nombre1 == 30 || $nombre2 == 30) {
    echo "l'un des deux nombres est égale à 30" . "<br>";
} else {
    echo "aucun des deux nombre n'est égale à 30" . "<br>";
}

if ($nombre1 + $nombre2 == 30) {
    echo "la somme des deux nombre est égale à 30";
} else {
    echo "la sommme des deux nombres n'est pas égale à 30";
}

echo "<br><br>";

echo "2. A partir d’une chaîne de caractères donnée, écrire un script qui rajoute ‘if ‘ au début de
cette chaîne. Si la chaîne débute déjà par if, on ne la modifie pas.<br><br>";

$string = "ifstring";
$resultat = substr($string, 0, 2);

if ($resultat == "if") {
    echo $string;
} else {
    echo "if$string";
}

echo "<br><br>";

echo "3. A partir de deux entiers donnés, ecrire un script qui calcule la somme des deux entiers. Si
les deux entiers sont égaux, on souhaite calculer à la place le triple de leur somme. <br><br>";

$nb1 = 5;
$nb2 = 5;
$somme = $nb1 + $nb2;

if ($nb1 !== $nb2) {
    echo $somme;
} else {
    echo $somme * 3;
}

echo "<br><br>";

echo "Exo 1: Fonctions" . "<br>";

function verifNombre($numbre1, $numbre2)
{
    if ($numbre1 == 30 || $numbre2 == 30) {
        echo "l'un des deux nombres est égale à 30" . "<br>";
    } else {
        echo "aucun des deux nombre n'est égale à 30" . "<br>";
    }
    if ($numbre1 + $numbre2 == 30) {
        echo "la somme des deux nombre est égale à 30";
    } else {
        echo "la sommme des deux nombres n'est pas égale à 30";
    }
}
verifNombre(15, 15);

echo "<br><br>";

echo "Exo 2: Fonctions" . "<br>";

function rajoutIf($string, $resultat)
{
    $resultat = substr($string, 0, 2);

    if ($resultat == "if") {
        echo $string;
    } else {
        echo "if$string";
    }
}
$string = "table";
echo $string;

echo "<br><br>";

echo "Exo 3: Fonctions" . "<br>";

function calculerSomme($num1, $num2)
{

    $somme = $num1 + $num2;
    if ($num1 !== $num2) {
        echo $somme;
    } else {
        echo $somme * 3;
    }
}
calculerSomme(20, 20);
