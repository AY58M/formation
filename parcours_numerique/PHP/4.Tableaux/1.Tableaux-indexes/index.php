<h1>PHP : Les tableaux - Les tableaux indexés</h1>

<?php

/**
 * formater un tableau dans les balises <pre> en html
 * @param mixed $array
 * @return void
 */

function formaterTableaux($array)
{
    echo "<pre>";
    print_r($array); // afficher des tableaux (echo n'affiche que des valeurs, pas de tableaux)

    echo "</pre>";
}

// deux syntaxes pour déclarer des tableaux en PHP 
$fruits = array("Pomme", "Banane", " Cerise", "Kiwi");
$fruits =  ["Pomme", "Banane", "Cerise", "Kiwi"];


echo "<pre>";
print_r($fruits); // afficher des tableaux (echo n'affiche que des valeurs, pas de tableaux)
echo "<pre>";
// var_dump( $fruits) ;

formaterTableaux($fruits);


echo $fruits[2] . "<br>"; // afficher un élément d'un tableau grace à son index
echo end($fruits); //*afficher le dernier élément d'un tableau


$fruits[2] = "Abricot"; // modifier la valeur d'un élément
formaterTableaux($fruits);

$fruits[] = "Poire"; //ajouter un élément dans le tableau (à la fin)
formaterTableaux($fruits);

/**
 * RAPPEL
 * un tableau indexé = liste numérotée qui commence à 0
 * On peut lir, modifier ou ajouter des d'éléments
 */
?>