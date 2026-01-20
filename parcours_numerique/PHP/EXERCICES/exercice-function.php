<!DOCTYPE html>
<html lang="en">
<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<?php
function calculerPerimetreRectangle($longueur, $largeur)
{
    return 2 * ($longueur + $largeur);
}
function calculerTriple($nombre)
{
    return $nombre * 3;
}
function calculerParimetreCercle($rayon)
{
    return 2 * pi() * $rayon;
}
function somme($a, $b)
{
    return $a + $b;
}

function estPair($nombre)
{
    return $nombre % 2 === 0;
}

function maxTableau($tab)
{
    $max = false;
    foreach ($tab as $valeur) {
        if ($max === false or $valeur > $max) {
            $max = $valeur;
        }
    }
    return $max ;
}

function contientMot () {

}


echo calculerPerimetreRectangle(4, 5);
echo "<br>";
echo somme(10, 20);
echo "<br>";
var_dump(estPair(7));
echo "<br>";
var_dump(estPair(10));
echo "<br>";
$tableau_test = [10, 25, 8, 36, 12];
var_dump(maxTableau($tableau_test));




?>

</html>