<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">
        <input placeholder="Note" type="text" name="grade">
        <input type="submit" value="send">
    </form>

    <?php

    if (isset($_POST['grade'])) {

        $grade = $_POST['grade'];

        switch ($grade) {
            case "A":
                echo "très bien";
                break;
            case "B":
                echo "bien";
                break;
            case "C":
                echo "moyen";
                break;
            case "D":
                echo "insuffisant";
                break;
            case "E":
                echo " trèsinsuffisant";
                break;
            case "F":
                echo "très mauvais";
                break;
            default:
                echo "Note invalide";
                break;
        }
    }

    ?>

</body>

</html>

</body>

</html>