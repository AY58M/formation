<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, animi ipsum. Laborum alias temporibus asperiores cumque in nobis molestias nam?";
    $explosion_result = explode(" ", $str);
    echo "nombre de mots :".count($explosion_result);
    echo "</br> nombre de caractères :" .strlen($str);
    $implode_result = implode ("", $explosion_result);
    // $str_sans_virgule = implode("", explode (",", $explosion_result));

    ?>
</body>
</html>