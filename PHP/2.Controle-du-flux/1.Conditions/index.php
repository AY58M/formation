<h1>Les Conditions</h1>

<?php

$a = 10;
$b = 20;
// Syntaxe de base
if ($a == 10) {
    echo "La condition est vraie";

}

// 2 ajouter une alternative avec else ( = dans tous les autres cas)
if ($a == 30) {

        echo "La condition est vraie";

}


else {
    echo "La condition est fausse";
}

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