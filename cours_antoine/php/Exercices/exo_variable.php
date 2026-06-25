<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP – Variable</title>
</head>

<body>
    <h1>Exercice PHP – Variable -
        Entrée/Sortie</h1>
    <?php
    $a = 15 ;
    $b = 23500 ;
    $c = "coucou ca va" ;
    $d = 14.50 ;
    $e = true ;
    $f = 6400;
    $g = 22500 ;
    $h = " la television coute 399€ " ;
    $i = " 1500 ";

    echo "Le type de la première variable est : " . gettype($a);
    echo '</br>';
    echo "Le type de la première variable est : " . gettype($b);
    echo '</br>';
    echo "Le type de la première variable est : " . gettype($c);
    echo '</br>';
    echo "Le type de la première variable est : " . gettype($d);
    echo '</br>';
    echo "Le type de la première variable est : " . gettype($e);
    echo '</br>';
    echo "Le type de la première variable est : " . gettype($f);
    echo '</br>';
    echo "Le type de la première variable est : " . gettype($g);
    echo '</br>';
    echo "Le type de la première variable est : " . gettype($h);
    echo '</br>';
    echo "Le type de la première variable est : " . gettype($i);

echo '</br>';
echo '</br>';

$nouvelArticle = 15.5;
$totalPrix = 50.0;
$quantiteArticles = 2;
$descriptionPanier = "Produits initiaux : Article A, Article B.";
$remise = 10;
$multiplicateurtaxe = 1.15; 

$totalPrix += 15.5;
echo $totalPrix;

echo '</br>';

$quantiteArticles  += 1;
echo $quantiteArticles;

echo '</br>';

$descriptionPanier .= ", Article C.";
echo $descriptionPanier;

echo '</br>';

$totalPrix -= $remise;
echo $totalPrix



    ?>



</body>

</html>