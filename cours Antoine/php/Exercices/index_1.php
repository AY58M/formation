<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* echo "Hello World";
  /*  hello kkkkkkk
  */

    $text_exemple = "text exemple";
    $nb_exemple = 5;
    $nb_exemple_2 = 10.2;
    $bool_exemple = true;
    $array_exemple = ['pomme', 'ananas', 'poire'];
    $array_assoc_exemple = ['exemple' => "tableau"];

    /*$text_total = $text_exemple;
    echo $text_total;
    $text_total .= "et un autre texte";
    $text_total .= "</br>";
    // equivalent
    $text_total = $text_total. "et un autre texte";
    $text_total = $text_total. "</br>";
    echo $text_total;

    
   $somme = $nb_exemple + $nb_exemple_2;
    echo $somme;
    echo '</br>';
    echo $somme - $nb_exemple * 2;
    echo '</br>';
    echo $nb_exemple * $somme;
    echo '</br>';
    echo $nb_exemple_2 - $nb_exemple;
    echo '</br>';
    echo $nb_exemple_2 / $nb_exemple;
    echo '</br>';
    echo $text_exemple . " concaténé";
    echo '</br>';
    echo "la somme de mes deux nombres est égale à : " . $somme;
    echo '</br>';
    echo "la différence de mes deux nombres est égale à : " . $somme - $nb_exemple * 2;
    echo '</br>';*/

    echo "Le type de la première variable est : " . gettype($text_exemple);
    echo '</br>';
    echo "Le type de la deuxième variable est : " . gettype($nb_exemple);
    echo '</br>';
    echo "Le type de la troisième variable est : " . gettype($nb_exemple_2);
    echo '</br>';
    echo "Le type de la quatrième variable est : " . gettype($bool_exemple);
    echo '</br>';
    echo "Le type de la cinquième variable est : " . gettype($array_exemple);
    echo '</br>';
    echo "Le type de la sixième variable est : " . gettype($array_assoc_exemple);

    echo '</br>';
    echo '</br>';

    var_dump($text_exemple);
    echo '</br>';
    var_dump($nb_exemple);
    echo '</br>';
    var_dump($nb_exemple_2);
    echo '</br>';
    var_dump($bool_exemple);
    echo '</br>';
    var_dump($array_exemple);
    echo '</br>';
    var_dump($array_assoc_exemple);














    ?>
</body>

</html>
<!-- <?php
        phpinfo();
        ?> -->