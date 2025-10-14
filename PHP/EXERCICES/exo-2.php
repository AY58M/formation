<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Préparation des exercices de jeudi sur les données de formulaire :</title>
    <link rel="stylesheet" href="exo-2.css">
</head>

<body>
    <h2>formulaire</h2>
    <form method="get" class="form-container">
        <label> Entrez votre age :</label>
        <input type="number" min="0" max="150">
        <br>
        <input type="submit" value="Valider">
        <br><br><br>
        <label>Entrez les deux mot:</label><br>
        <input type="text"><br>
        <input type="text"><br>
        <input type="submit" value="Valider">
        <br><br><br>

        <label for="number">Entrez un chiffre entre 1 et 999 :</label><br>
        <input type="number" min="1" max="999"><br>
        <input type="submit" value="Valider">

        <br><br><br>


        <h3>Entrez vos informations :</h3>
        <label>Nom : </label>
        <input type="text"><br>
        <label>Prénom :</label>
        <input type="text"><br>
        <label>Adresse :</label>
        <input type="text"><br>
        <label>Téléphone :</label>
        <input type="number"><br>
        <input type="submit" value="Valider">

        <br><br><br>

        <label for="annee">Entrez une année :</label>
        <select>
            <?php
            $anneeActuelle = date("2025");
            for ($i = $anneeActuelle; $i >= 0; $i--) {
                echo "<option >$i</option>";
            }
            ?>
        </select>
        <input type="submit" value="Envoyer">

    </form>




</body>

</html>