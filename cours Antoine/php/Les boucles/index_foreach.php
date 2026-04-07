<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h3>Parcourir les valeurs uniquement</h3>";


    $fruits = ["pomme", "banane", "orange", "fraise", "kiwi", "mangue"];
    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }

    echo '<br><br>';


    echo "<h3>Parcourir clés et valeurs</h3>";

    $notes = ["Alice" => 14, "Bob" => 9, "Charlie" => 17, "Diane" => 12, "Eric" => 8,];
    foreach ($notes as $nom => $note) {
        echo $nom . " a eu $note/20. <br> ";
    }



    echo "<h3>Condition dans un foreach</h3>";

    $produits = ["clavier" => 29.99, "souris" => 19.99, "ecran" => 189.90, "casque" => 59.50, "webcam" => 89.00,];
    foreach ($produits as $produit => $prix) {
        if ($prix > 50) {
            echo $produit . " :" . " " . $prix . " euros" . "<br>";
        }
    }

    echo "<h3>tableau associatif complexe</h3>";


    $utilisateurs = [["prenom" => "Lucas", "age" => "22", "ville" => "Paris"], ["prenom" => "Emma", "age" => "30", "ville" => "Lyon"], ["prenom" => "Noah", "age" => "17", "ville" => "Marseille"], ["prenom" => "Lina", "age" => "25", "ville" => "Toulouse"]];

    foreach ($utilisateurs as $utilisateur) {

        echo $utilisateur["prenom"] . " (" . $utilisateur["age"] . " ans" . ")" . " - " . $utilisateur["ville"] . "<br>";
    };

    echo "<h3>Exercice Bonus 2</h3>";


    $eleves = [
        ["nom" => "Martin", "prenom" => "Alice", "moyenne" => 14.5],
        ["nom" => "Durand", "prenom" => "Lucas", "moyenne" => 9.8],
        ["nom" => "Bernard", "prenom" => "Claire", "moyenne" => 16.2],
        ["nom" => "Petit", "prenom" => "Hugo", "moyenne" => 11.0],
        ["nom" => "Robert", "prenom" => "Emma", "moyenne" => 7.5],
        ["nom" => "Moreau", "prenom" => "Nathan", "moyenne" => 12.9],
        ["nom" => "Fournier", "prenom" => "Léa", "moyenne" => 18.1],
        ["nom" => "Girard", "prenom" => "Noah", "moyenne" => 10.0],
        ["nom" => "Andre", "prenom" => "Inès", "moyenne" => 13.4],
        ["nom" => "Lefevre", "prenom" => "Tom", "moyenne" => 8.6],
        ["nom" => "Roux", "prenom" => "Sarah", "moyenne" => 15.3],
        ["nom" => "Blanc", "prenom" => "Enzo", "moyenne" => 9.1],
        ["nom" => "Garnier", "prenom" => "Manon", "moyenne" => 14.0],
        ["nom" => "Chevalier", "prenom" => "Louis", "moyenne" => 11.7],
        ["nom" => "Francois", "prenom" => "Camille", "moyenne" => 13.8],
        ["nom" => "Lambert", "prenom" => "Jules", "moyenne" => 6.9],
        ["nom" => "Bonnet", "prenom" => "Chloé", "moyenne" => 17.4],
        ["nom" => "Dupont", "prenom" => "Mathis", "moyenne" => 10.5],
        ["nom" => "Henry", "prenom" => "Anaïs", "moyenne" => 12.1],
        ["nom" => "Renaud", "prenom" => "Paul", "moyenne" => 8.2],
        ["nom" => "Marchand", "prenom" => "Zoé", "moyenne" => 16.8],
        ["nom" => "Perrot", "prenom" => "Arthur", "moyenne" => 9.9],
        ["nom" => "Caron", "prenom" => "Mila", "moyenne" => 14.6],
        ["nom" => "Boyer", "prenom" => "Théo", "moyenne" => 11.3],
        ["nom" => "Arnaud", "prenom" => "Lina", "moyenne" => 13.0],
        ["nom" => "Colin", "prenom" => "Ethan", "moyenne" => 7.8],
        ["nom" => "Renard", "prenom" => "Juliette", "moyenne" => 15.9],
        ["nom" => "Picard", "prenom" => "Maxime", "moyenne" => 10.8],
        ["nom" => "Lopez", "prenom" => "Sofia", "moyenne" => 12.5],
        ["nom" => "Nguyen", "prenom" => "Kevin", "moyenne" => 8.9]
    ];

    $admis = [];
    $rattrapage = [];
    $echec = [];
    $sum = 0;

    foreach ($eleves as $student) {

        if ($student['moyenne'] >= 10) {
            $admis[] = $student;
        }
        if ($student['moyenne'] >= 8 && $student['moyenne'] < 10) {
            $rattrapage[] = $student;
        }
        if ($student['moyenne'] < 8) {
            $echec[] = $student;
        }

        $sum += $student['moyenne'];
    }

    $moyenne = $sum / count($eleves);
    echo "Moyenne de la classe : " . round($moyenne, 2) . "<br><br>";

    echo "Élèves admis : " . count($admis) . "<br><br>";
    foreach ($admis as $student) {
        echo $student['nom'] . "   " . $student['prenom'] . " " . $student['moyenne'] . "<br>";
    }
    echo "<br>rattrapage : " . count($rattrapage) . "<br><br>";
    foreach ($rattrapage as $student) {
        echo $student['nom'] . " " . $student['prenom'] . " " . $student['moyenne'] . "<br>";
    }
    echo "<br>Echec : " . count($echec) . "<br><br>";
    foreach ($echec as $student) {
        echo $student['nom'] . " " . $student['prenom'] . " " . $student['moyenne'] . "<br>";
    }

    ?>
</body>

</html>