<?php

function genererGrilleEtoile($lignes, $colonnes)
{
    echo "<div class='container grille'>";
    
    for ($i = 0; $i < $lignes; $i++) {

        for ($y = 0; $y < $colonnes; $y++) {
            echo "*";
        }
        echo "</br>";
    }
    echo "</div>";
}

var_dump($_POST);

if (isset($_POST["lignes"])) {
    $lignes = $_POST["lignes"];
}

if (isset($_POST["colonnes"])) {
    $colonnes = $_POST["colonnes"];
}

?>


<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form method='post'>

            <div class="input-group">
                <label for="lignes">Lignes</label>
                <input id="lignes" name="lignes" type="text">
            </div>
            <div class="input-group">
                <label for="colonnes">Colonnes</label>
                <input id="colonnes" name="colonnes" type="text">
            </div>
            <input type="submit" value="envoyer" />
        </form>

        <?php

        if (isset($lignes) && isset($colonnes)) {
            genererGrilleEtoile($lignes, $colonnes);
        }
        ?>
    </div>


</body>

</html>