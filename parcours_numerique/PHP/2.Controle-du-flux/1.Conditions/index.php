<h1>Les Conditions</h1>

<?php

$a = 10;
$b = 20;
// Syntaxe de base
if ($a == 10) {
    echo "La condition est vraie";

}

echo "<br>";


// 2 ajouter une alternative avec else ( = dans tous les autres cas)
if ($a == 30) {

        echo "La condition est vraie";

}


else {
    echo "La condition est fausse";
}

echo "<br>";


// 3 tester plusieurs alternatives avec elseif


if ($a == 30) {
    echo "a=30";
}

elseif ($a == 20) {
     echo "a=20";
}

elseif ($a == 10) {
     echo "a=10";
}

else { 
    echo "a est différent de 30,20, ou 10";
}


echo "<br>";

$age = 2;

// déclarer une condition, si la personne a plus de 18 ans on affiche un mesage la personne est majeure. Si elle a moins de &_ ans , on affiche le message la personne est mineure, et si elle a moins ou égal à 3 ans on affiche le message , la personne est un bébé.

if ($age >= 18) {

    echo "la personne est majeur";
}

elseif ($age <= 3 ) {
    echo "la personne est un bébé";
}

elseif ($age < 18) {
    echo "la personne est mineur";
}

echo "<br>";


$note = 18;

if ($note >= 16 ) {

    echo "très bien";
}

elseif ($note >= 10) {

    echo "Moyen";
}

elseif ($note < 10) {

    echo "Insuffisan";
}