<?php
$nomServeur = 'localhost';
$nomBase = 'evaluation_compagnie_aerienne';
$dsn = "mysql:host=$nomServeur;dbname=$nomBase";

$username = 'admin';
$password = 'resu_ass';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

// Connexion à la base de données
$connection = new PDO($dsn, $username, $password, $options);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">
        Nom : <input type="text" name="nom"><br>
        Prénom : <input type="text" name="prenom"><br>
        Email : <input type="email" name="email"><br>
        Date de naissance : <input type="date" name="date_naissance"><br>
        <input type="submit" name="envoyer" value="Ajouter">
    </form>


    <?php

    // Inserer un nouveau client:
    // -----------------------------

    // $query = $connection->prepare(
    //     "INSERT INTO client (nom, prenom, email, date_naissance) 
    //     VALUES (:nom, :prenom, :email, :date_naissance)"
    // );
    // $query->execute(
    //     [
    //         ":nom" => 'Breton',
    //         ":prenom" => "Alistair",
    //         ":email" => "alistaire.breton@gmail.com",
    //         ":date_naissance" => "2013-02-01"
    //     ]
    // );



    // Inserer un nouveau clien via un formulaire :
    //   ----------------------------------------------

    if (isset($_POST['envoyer'])) {

        $query = $connection->prepare(
            "INSERT INTO client (nom, prenom, email, date_naissance) 
             VALUES (:nom, :prenom, :email, :date_naissance)"
        );

        $query->execute([
            ":nom" => $_POST['nom'],
            ":prenom" => $_POST['prenom'],
            ":email" => $_POST['email'],
            ":date_naissance" => $_POST['date_naissance']
        ]);

        echo "Client ajouté !";
    }

    // if($_SERVER)

    ?>

</body>

</html>