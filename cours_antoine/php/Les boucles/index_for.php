<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($x = 1; $x <= 10; $x++) {
        echo $x;

        if ($x < 10) {

            echo  '-';
        }
    }

    echo '<br><br>';

    $sum = 0;

    for ($x = 1; $x <= 30; $x++) {

        $sum += $x;
    }
    echo 'La somme est : ' . $sum;

    echo '<br><br>';

    $haystack = 'anticonstitutionnellement';
    $needle = 'n';
    $occurences = 0;
    for ($i = 0; $i < strlen($haystack); $i++) {
        if ($haystack[$i] === $needle) {
            $occurences++;
        }
    }
    echo "il y a " . $occurences . " occurences de la lettre 'n' dans le mot " . $haystack . ".";

    echo '<br><br>';

    for ($x = 1; $x <= 100; $x++) {

        echo '<br>';
        echo $x;

        if ($x % 3 === 0) {
            echo ' Fizz';
        } if ($x % 5 === 0) {
            echo ' Buzz';
        }
    }

    echo '<br><br>';

    






    ?>
</body>

</html>