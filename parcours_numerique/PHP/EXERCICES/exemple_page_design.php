<?php
// Déclaration fonctions
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

function genererTableauHTML($lignes, $colonnes)
{
    echo "<div class='container grille'>";
    echo "<table class='tableau_grille' >";
    for ($i = 0; $i < $lignes; $i++) {
        echo "<tr>";

        for ($y = 0; $y < $colonnes; $y++) {
            echo "<td></td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
}

// Récupération des données
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
    <style>
        .grille {
            margin: 25px auto;
            width: 100%;
        }

        header {
            background: black;
            color: white;
            padding: 25px 0px;
            margin-bottom: 25px;
        }

        .input-group label {
            padding: 0px 12.5px;
            min-width: 100px;
        }

        .form-group {
            margin-bottom: 25px;
            width: 100%;
        }

        form {
            padding: 25px;
            background: #eee;
            border-radius: 8px;
            justify-items: flex-end;
        }

        table.tableau_grille,
        table.tableau_grille td {
            border : 1px solid black ;
            padding: 5px 10px 5px 10px ;
            
        }
        
table.tableau_grille {
    width: 100%;
}
    
    </style>
</head>

<body>
    <header>
        <div  class='container'>
            <h1>Exercice Etoiles</h1>
        </div>
    </header>
    <div class="container">
        <form method='post' class='form-container'>
            <div class='form-group'>
                <label class="form-label" for="lignes">Lignes</label>
                <input id='lignes' class="form-control" name='lignes' type='text'>
            </div>
            <div class='form-group'>
                <label class="form-label" for="colonnes">Colonnes</label>
                <input id='colonnes' class="form-control" name='colonnes' type='text'>
            </div>
            <input type='submit' class="btn btn-primary" value='Envoyer' />
        </form>
        <?php
        if (isset($lignes) && isset($colonnes)) {
            genererTableauHTML($lignes, $colonnes);
        }
        ?>
    </div>
</body>

</html>