<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
</head>

<body>
    <h2>Exercices supplémentaires PHP - Fonctions</h2>

    <h3>Fonction avec typage et contrôle</h3>

    <form action="" method="POST">
        <input placeholder="Prénom" type="text" name="prenom">
        <input type="submit" value="Envoyer">
    </form>

    <?php


    function direBonjour($prenom = false)
    {

        return "bonjour $prenom";
    }


    if (isset($prenom)) {
        echo "direBonjour($prenom)";
    }

    ?>


</body>

</html>