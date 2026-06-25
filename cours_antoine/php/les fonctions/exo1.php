<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input placeholder="Longueur" type="text" name="longueur">
        <input placeholder="Largeur" type="text" name="largeur">
        <input type="submit" value="Envoyer">
    </form>

    <?php

    function Aire($longueur, $largeur)
    {

        return $longueur * $largeur;
    }

    if (isset($_POST['longueur'], $_POST['largeur'])) {
        $longueur = $_POST['longueur'];
        $largeur = $_POST['largeur'];
        $aire = Aire($longueur, $largeur);

        echo "l'aire du terrain est $aire m<sup>2</sup>";
    }
    echo "<br><br>";
    ?>

    <form action="" method="POST">
        <input type="text" name="mot">
        <input type="submit" value="Envoyer">
    </form>
    <?php

    function Palindrom($mot)
    {
        return $mot === strrev($mot);
    }
    if (isset($_POST['mot'])) {
        $mot = $_POST['mot'];
        if (Palindrom($mot)) {
            echo "$mot est un palindrome";
        } else {
            echo "$mot n'est pas un palindrome";
        }
    }


    ?>

</body>

</html>