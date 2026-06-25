<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activités 3</title>
</head>

<body>


    <h2>Structures de contrôles itératives</h2>

    <form action="" method="$_POST">
        <input type="text" placeholder="Nombre 1" name="nb1"><br>
        <input type="text" placeholder="Nombre 2" name="nb2"><br>
        <input type="submit" value="Envoyer"><br>
    </form>


    <?php

    function displayForm($nb1, $nb2)
    {
        for ($i = 1; $i <= 4; $i++) {
            for ($j = 1; $j <= 8; $j++) {
                echo "😎";
            }
            echo "<br>";
        }
        if (isset($_POST["nb1"], $_POST["nb2"])) {
            $nb1 = $_POST["nb1"];
            $nb2 = $_POST["nb2"];
            echo displayForm($nb1, $nb2);
            
        }
    }

    echo "Exercice 5 : " . "<br><br>";

    for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= 8; $j++) {
            echo "😎";
        }
        echo "<br>";
    }
    echo "<br>";

    echo "Exercice 6 : " . "<br><br>";

    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "😎";
        }
        echo "<br>";
    }
    echo "<br>";

    echo "Exercice 7 : " . "<br><br>";

    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "😎";
        }
        echo "<br>";
    }
    echo "<br>";

    echo "Exercice 8 : " . "<br><br>";

    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "😎";
        }
        echo "<br>";
    }

    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "😎";
        }
        echo "<br>";
    }





    ?>
</body>

</html>