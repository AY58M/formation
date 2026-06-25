<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Miel d'Arles</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="miel_darles.css">
</head>

<body class="home_body">

    <?php include 'include/header.php' ?>

    <main>
        <div class="d-flex justify-content-around bg-warning py-2 categorie-bar">
            <!-- <a href="listing_miel_darles.html" class="text-dark fw-bold text-decoration-none">
                Découvrir nos produits
            </a> -->
            <a href="listing_miel_darles.php">Nos Miels</a>
            <a href="#">Produits gourmands</a>
            <a href="#">Bien-être</a>
            <a href="#">Cosmétiques</a>
            <a href="#">Coffrets</a>
            <a href="#">Accessoires</a>
        </div>

        <div class="container mt-5 bienvenue">

            <h1>Miel d'Arles 🍯</h1>
            <p class="text_bienvenue">Découvrez nos miels artisanaux récoltés en Provence</p>

        </div>

        <div class="text-center click mt-4">

            <a href="listing_miel_darles.php" class="bouton text-decoration-none">
                Acheter maintenant
            </a>

        </div>

        <div class="container mt-5">
            <div class="row text-center">

                <div class="col-md-4 mb-4 avantage">
                    <img src="images/truck.svg" alt="Livraison rapide">
                    <h5 class="mt-3">Livraison rapide</h5>
                    <p>Expédition sous 24h partout en France.</p>
                </div>

                <div class="col-md-4 mb-4 avantage">
                    <img src="images/flower1.svg" alt="Récolte locale">
                    <h5 class="mt-3">Récolte locale</h5>
                    <p>Miel récolté à Arles par nos apiculteurs.</p>
                </div>

                <div class="col-md-4 mb-4 avantage">
                    <img src="images/shield-check.svg" alt="100% naturel">
                    <h5 class="mt-3">100% naturel</h5>
                    <p>Sans additif ni transformation.</p>
                </div>

            </div>
        </div>
    </main>

    <?php include 'include/footer.php' ?>

    <script src="../js/bootstrap.js"></script>
</body>

</html>