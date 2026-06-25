<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
    <style>

    </style>
</head>

<body>

    <h2>Exercices supplémentaires PHP - Fonctions</h2>

    <h3>Exercice 1 - Fonction avec typage et contrôle</h3>

    <form action="" method="POST">
        <input placeholder="Prénom" type="text" name="prenom">
        <input type="submit" value="Envoyer">
    </form>

    <?php

    function direBonjour($prenom)
    {

        if ($prenom == "") {
            return "Bonjour invité";
        }
        return "Bonjour $prenom";
    }

    if (isset($_POST["prenom"])) {

        $prenom = $_POST["prenom"];
        echo "<h3>" .  direBonjour($prenom) .  "</h3>";
    }



    ?>
    <h3>Exercice 2 - Fonction de calcul avec valeur par défaut</h3>

    <form action="" method="post">
        <input type="text" placeholder="Prix HT" name="prixht"><br>
        <input type="text" placeholder="TVA" name="tva"><br>
        <input type="submit" value="Send">
    </form>


    <?php

    function calculerPrixTTC($prixHT, $TVA = 0.20)
    {
        return round($prixHT + $prixHT * $TVA, 2);
    }

    if (isset($_POST['prixht'], $_POST['tva'])) {

        $prixHT = (float) $_POST['prixht'];
        $TVA = (float) $_POST['tva'] / 100;

        if ($TVA == 0) {
            echo "Le prix TCC est : " . calculerPrixTTC($prixHT) . " €" . "<br>";
        } else {
            echo "Le prix TCC est : " . calculerPrixTTC($prixHT, $TVA) . " €" . "<br>";
        }
    }

    ?>

    <h3>Exercice 3 – Fonction qui transforme un tableau</h3>


    <?php
    function appliquerReduction(array $prix, float $reduction): array
    {
        $prixReduits = [];

        foreach ($prix as $p) {
            $prixReduits[] = round($p - ($p * $reduction / 100), 2);
        }

        return $prixReduits;
    }

    $prix = [10, 20, 50];
    $reduction = 10;

    $prixReduits = appliquerReduction($prix, $reduction);

    ?>

    <h4>Tableau initial</h4>

    <?php
    foreach ($prix as $p) {
        echo "$p €" . "<br>";
    }
    ?>


    <h4>Tableau avec réduction 10 %</h4>

    <?php
    foreach ($prixReduits as $p) {
        echo "$p €" . "<br>";
    }
    ?>

    <h3>Exercice 4 – cas concret : fonction utilitaire</h3>
    
    <ol>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ol>

    <?php
    function formatePrix (float $prix) {

    }

    ?>



</body>

</html>