<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Exemple</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/main.css">
</head>

<body>
    <div class="container">
        <!-- <div class="row">
            <div class="bg_red offset-1  col-md-10">colomne 1</div>
        </div>

        <div class="row">
            <div class="bg_green offset-3  col-md-6">colomne 2</div>
        </div>

        <div class="row">
            <div class="bg_blue offset-5  col-md-2">colomne 3</div>
        </div>

        <div class="row">
            <div class="bg_red col-md-3">colomne 4</div>
            <div class="bg_green col-md-3">colomne 4</div>
            <div class="bg_yellow col-md-3">colomne 4</div>
            <div class="bg_orange col-md-3">colomne 4</div>
        </div>

        <div class="row">
            <div class="bg_blue  col-md-12">colomne 5</div>
        </div>

        <div class="row">
            <div class="offset-2 bg_red col-md-5">colomne 6</div>
            <div class="offset-2 bg_green col-md-3">colomne 6</div>
        </div> -->


        <!-- ___________________________________________________ -->
        <!-- --------------------------------------------------- -->


        <!-- <div class="row">
            <div class="bg_red col-12 col-md-6 col-lg-3 col-xl-2">colomne 1</div>
            <div class="bg_blue col-12 col-md-6 col-lg-3 col-xl-2">colomne 2</div>
            <div class="bg_green col-12 col-md-6 col-lg-3 col-xl-2">colomne 3</div>
            <div class="bg_orange col-12 col-md-6 col-lg-3 col-xl-2">colomne 4</div>
            <div class="bg_orange col-12 col-md-6 col-lg-3 col-xl-2">colomne 5</div>
        </div> -->


        <!-- ___________________________________________________ -->
        <!-- --------------------------------------------------- -->

        <?php

        $produits = [
            1 => ["nom" => "Casque Bluetooth", "prix" => 79.90],
            2 => ["nom" => "Écouteurs sans fil", "prix" => 59.90],
            3 => ["nom" => "Enceinte portable", "prix" => 89.00],
            4 => ["nom" => "Smartphone", "prix" => 699.00],
            5 => ["nom" => "Tablette", "prix" => 429.00],
            6 => ["nom" => "Ordinateur portable", "prix" => 1099.00],
            7 => ["nom" => "Clavier mécanique", "prix" => 129.90],
            8 => ["nom" => "Souris gaming", "prix" => 69.90],
            9 => ["nom" => "Écran 27 pouces", "prix" => 299.00],
            10 => ["nom" => "Webcam HD", "prix" => 79.00],
            11 => ["nom" => "Microphone USB", "prix" => 119.00],
            12 => ["nom" => "Disque dur externe", "prix" => 99.90],
            13 => ["nom" => "SSD externe", "prix" => 149.90],
            14 => ["nom" => "Clé USB 128 Go", "prix" => 24.90],
            15 => ["nom" => "Manette de jeu", "prix" => 64.90],
            16 => ["nom" => "Console de jeux", "prix" => 549.00],
            17 => ["nom" => "Jeu vidéo", "prix" => 69.90],
            18 => ["nom" => "Casque VR", "prix" => 399.00],
            19 => ["nom" => "Montre connectée", "prix" => 249.00],
            20 => ["nom" => "Bracelet fitness", "prix" => 59.00],
            21 => ["nom" => "Vélo de ville", "prix" => 499.00],
            22 => ["nom" => "Trottinette électrique", "prix" => 649.00],
            23 => ["nom" => "Ballon de football", "prix" => 29.90],
            24 => ["nom" => "Raquette de tennis", "prix" => 119.00],
            25 => ["nom" => "Chaussures de running", "prix" => 139.00],
            26 => ["nom" => "Sac de sport", "prix" => 49.90],
            27 => ["nom" => "Tapis de yoga", "prix" => 29.00],
            28 => ["nom" => "Gants de musculation", "prix" => 24.00],
            29 => ["nom" => "Haltères (paire)", "prix" => 79.00],
            30 => ["nom" => "Montre GPS sport", "prix" => 329.00]
        ];
        ?>

        <div class="row">

            <?php
            $i = 0;
            foreach ($produits as $produit) {
                $i++;
                echo "<div class='bg_blue col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2";
                if ($i % 5 === 0) {
                    echo "offset-xl-1 offset-xxl-0";
                }
                echo "'>";
                echo "<h3>" . $produit["nom"] . "</h3>";
                echo "<h4>" . $produit["prix"] . "</h4>";
                echo "</div>";
            }

            ?>

        </div>

    </div>
</body>

</html>