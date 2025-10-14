<?php

function genererTriangleEtoile($hauteur, $inverse = false){

    echo "<div class='container triangle'>";
    if (!$inverse) {
        //afficher un triangle croissant
        for ($i = 0; $i < $hauteur; $i++) {

            for ($y = 0; $y <= $i; $y++) {

                echo "*";
            }
            echo "</br>";
        }
    } else {
        //afficher un triangle décroissant

        for ($i = $hauteur; $i > 0; $i--) {

            for ($y = 0; $y < $i; $y++) {

                echo "*";
            }
            echo "</br>";
        }
    }

    echo "</div>";
function genererTriangtableau($hauteur, $inverse = false){

    if (!$inverse) {
                echo "<div class= 'triangle_tableau'>";
                echo "<table class='triangle_tableau'>";

        //afficher un triangle croissant
        for ($i = 0; $i < $hauteur; $i++) {
            echo "<tr>";

            for ($y = 0; $y < $hauteur; $y++) {
                $class="";

                if (!$inverse) {
                if ($y>=$i){
                    $class= "class='red'";
                }

                }

                echo "<td $class></td>";
            }
            echo "</br>";
        }
        echo "</tr>";    
    }
    echo "</table>";

}
echo "</div>";



}
if (isset($_POST["hauteur"])) {
    $hauteur = $_POST["hauteur"];
}


?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <header>
        <div class='container'>
            <h1>Exercice Triangle</h1>
        </div>
    </header>
    <div class="container">
        <form method='post' class='form-container'>
            <div class='form-group'>
                <label class="form-label" for="lignes">hauteur</label>
                <input id='hauteur' class="form-control" name='hauteur' type='text'>
            </div>
            <input type='submit' class="btn btn-primary" value='Envoyer' />
        </form>
        <?php
        if (isset($hauteur)) {
            genererTriangleEtoile($hauteur);
            genererTriangleEtoile($hauteur, true);
        }

        ?>
    </div>
</body>
</html>