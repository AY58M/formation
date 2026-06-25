<?php
require_once('Rectangle.php');
require_once('Carre.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php

    // RECTANGLE
    // $rectangle_1 = new Rectangle(3, 50);
    // $rectangle_2 = new Rectangle(2, 6);
    // print_r($rectangle_1);
    // print_r($rectangle_2);
    // $rectangle_1->setLargeur(5);
    // $rectangle_1->setLongueur(30);
    // $rectangle_2->setLargeur(3);
    // $rectangle_2->setLongueur(7);
    // print_r($rectangle_1);
    // print_r($rectangle_2);

    // CARRE
    $carre = new Carre(5);
    print_r($carre);

    echo $carre->getAir();
    ?>
    </pre>




</body>

</html>