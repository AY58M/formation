<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activités 2</title>
</head>

<body>
    <h1>Structures de contrôles conditionnelles</h1>
    <h2>Exercice 1</h2>
    <form action="" method="POST">
        <input placeholder="Nombre1" type="text" name="nombre1">
        <input placeholder="Nombre2" type="text" name="nombre2">
        <input type="submit" value="Envoyer">
    </form>

    <pre>
    <?php

    var_dump($_POST);

    if (isset($_POST['nombre1'], $_POST['nombre2'])) {

        $nombre1 =  $_POST["nombre1"];
        $nombre2 = $_POST["nombre2"];

        if ($nombre1 == '30' || $nombre2 == '30') {
            echo "Un des deux nombres est égal à 30";
        } elseif ($nombre1 + $nombre2 == '30') {
            echo "La somme des deux nombres est égale à 30";
        } else {
            echo "Aucun des deux nombre ni leur somme n'est égale à 30";
        };
    }
    ?>

    <h2>Exercice 2</h2>
    <form method="POST">
        <input placeholder="Chaine de charactère" type="text" name="str">
        <input type="submit" value="Envoyer">

    </form>
    <?php
    var_dump($_POST);

    if (isset($_POST['str'])) {
        $str = $_POST['str'];
        if (substr($str, 0, 2) != "if") {
            $str = "if" . $str;
        }
        echo $str;
    }

    ?>

    <h2>Exercice 3</h2>
        <form action="" method="POST">
        <input placeholder="Nombre1" type="text" name="ex_3_nombre1">
        <input placeholder="Nombre2" type="text" name="ex_3_nombre2">
        <input type="submit" value="Envoyer">

        <pre>
<?php
var_dump($_POST);

if (isset($_POST['ex_3_nombre1'], $_POST['ex_3_nombre2'])) {

    $nombre1 =  $_POST["ex_3_nombre1"];
    $nombre2 = $_POST["ex_3_nombre2"];

    if ($nombre1 !== $nombre2) {
        echo "La somme des deux nombres est :" . $nombre1 + $nombre2;
    } else {
        echo "Le triple de la somme des deux nombres est :" . ($nombre1 + $nombre2) * 3;
    }
}

//  if (isset($_POST['ex_3_nb_1']) && isset($_POST['ex_3_nb_2'])) {
//             $nb_1 = $_POST['ex_3_nb_1'];
//             $nb_2 = $_POST['ex_3_nb_2'];
//             if($nb_1 === $nb_2) {
//                 $resultat = ($nb_1+$nb_2)*3;
//             } else {
//                 $resultat = $nb_1+$nb_2;
//             }
//             echo $resultat;
//         }


?>
</pre>
    </form>
    </pre>
</body>

</html>