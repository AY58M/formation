<?php
/*************************************
 * 1. Déclaration et initialisation
 *************************************/

$nomPersonnage = "Kaelen Lame-d'Ombre";
$classe = "Rodeur";
$niveau = 45;
$devise = "Le vent est mon guide.";
$pointsVie = 1250;
$pointsMana = 1500;

/*************************************
 * 2. Manipulation de chaînes
 *************************************/

$nomGuilde = "Les héros du crépuscule";
$deviseMajuscule = strtoupper($devise);

$texteIntroduction = 
    "Je me nomme $nomPersonnage, $classe de la guilde $nomGuilde. 
    Ma devise est : \"$devise\".";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche de personnage</title>

    <!-- CSS minimal thématique -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e2f;
            color: #f0f0f0;
        }

        .fiche {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #2b2b40;
            border-radius: 10px;
            box-shadow: 0 0 10px #000;
        }

        h1 {
            text-align: center;
            color: #f5c542;
        }

        .info {
            margin: 10px 0;
        }

        .label {
            font-weight: bold;
            color: #f5c542;
        }

        .devise {
            font-style: italic;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="fiche">
    <h1>Fiche de Personnage</h1>

    <p class="info"><span class="label">Nom :</span> <?php echo $nomPersonnage; ?></p>
    <p class="info"><span class="label">Classe :</span> <?php echo $classe; ?></p>
    <p class="info"><span class="label">Niveau :</span> <?php echo $niveau; ?></p>
    <p class="info"><span class="label">Guilde :</span> <?php echo $nomGuilde; ?></p>
    <p class="info"><span class="label">Points de vie :</span> <?php echo $pointsVie; ?></p>
    <p class="info"><span class="label">Points de mana :</span> <?php echo $pointsMana; ?></p>

    <p class="devise">Devise : <?php echo $deviseMajuscule; ?></p>

    <hr>

    <p><?php echo $texteIntroduction; ?></p>
</div>

</body>
</html>
