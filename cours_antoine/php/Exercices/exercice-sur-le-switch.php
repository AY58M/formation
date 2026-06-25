<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Notes Américaines :</h2>
    <form method="post">
        <!-- <label><b>Note : </b></label> -->
        <input type="text" placeholder="Note" name="note">
        <input type="submit" value="Valider">
    </form>
    <br>

    <?php

    function noteAmericaine($note)
    {
        $note = strtoupper($note);

        switch ($note) {
            case "A":
                return "Trés bien";
            case "B":
                return "Bien";
            case "C":
                return "Moyen";
            case "D":
                return "Insuffisant";
            case "E":
                return "Très insuffisant";
            case "F":
                return "Très mauvais";
            default:
                return "Erreur";
        }
    }

    $mention = "";
    if (isset($_POST['note'])) {
        $mention = noteAmericaine($_POST['note']);
    }

    echo "<b>Mention : $mention</b>";

    ?>
</body>

</html>