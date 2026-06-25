<?php
$nom = "Kaelen Lame-d'Ombre";
$classe = "Paladin";
$niveau = 45;
$devise = "Le vent est mon guide";
$point_de_vie = 1250;
$point_de_mana = 1500;


$nom_de_guilde = "Les héros du crépuscule";
$devise_majuscule = strtoupper($devise);

/*echo "<h3>Fiche personnage</h3>";*/

echo "</br>";
$texte_introduction = "Je m'appelle " . $nom . ". Je suis un " . $classe . ". Je suis de la guilde : " . $nom_de_guilde . ". Ma devise est : " . $devise .  ".";


/*echo "<p>$texte_introduction</p>";
echo "Niveau : ". $niveau;
echo "</br>";
echo "Points de vie : ". $point_de_vie;
echo "</br>";
echo "Points de mana : ". $point_de_mana */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de Personnage de Jeu de Rôle (RPG)</title>
    <link rel="stylesheet" href="fiche_personnage.css">
</head>

<body>
    <h2>Fiche personnage</h2>

    <p class="devise"><span class="titre">Devise :</span> <?php echo "</br>" . $devise_majuscule ?></p>

    <p class="intro"><span class="titre">Introduction :</span></br><?php echo $texte_introduction ?></p>

    <div class="carte">
        <p><span class="titre">nom de guilde : </span><?php echo $nom_de_guilde ?></p>
        <p><span class="titre">classe :</span> <?php echo $classe ?></p>
        <p><span class="titre">niveau :</span> <?php echo $niveau ?></p>
        <p><span class="titre">Points de vie : </span><?php echo $point_de_vie ?></p>
        <p><span class="titre">Point de mana : </span><?php echo $point_de_mana ?></p>
    </div>


</body>

</html>