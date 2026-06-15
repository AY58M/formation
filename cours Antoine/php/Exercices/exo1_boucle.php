<?php

echo "Exerice1 : Liste HTML". "<br><br>";

function generer_liste_html ($elements){

$html = "<ul>";

    foreach ($elements as $element) {

        $html = $html."<li>$element</li>";
    }
    return $html. "</ul>";
}

$fruits = ["banane", "orange", "fraise", "pomme"];
echo generer_liste_html ($fruits);

$voitures = ["peugeot", "citroen", "renault", "mercedes"];
echo generer_liste_html($voitures). "<br>";

echo "Exerice 2 : Liste HTML". "<br><br>";

function compter_voyelles ($string) {



}


?>