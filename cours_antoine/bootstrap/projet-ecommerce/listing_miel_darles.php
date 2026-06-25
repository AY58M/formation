<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Miel d'Arles</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="miel_darles.css">
</head>

<body class="listing_body">
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

        <div class="container mt-4">
            <div class="row g-4">

                <div class="col-12 col-md-6">

                    <div class="card produit-card">
                        <a href="">
                            <img src="images/miel-de-lavande.jpg" class="card-img-top" alt="Miel de Lavande">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Miel de Lavande</h5>
                            <p class="prix">12,90 €</p>
                            <a href="#" class="btn btn-warning w-100">Acheter</a>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-6">

                    <div class="card produit-card">
                        <a href="">
                            <img src="images/miel-d-acacia.jpg" class="card-img-top" alt="Miel d'acacia">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Miel d'Acacia</h5>
                            <p class="prix">13,50 €</p>
                            <a href="#" class="btn btn-warning w-100">Acheter</a>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-6">

                    <div class="card produit-card">
                        <a href="miel_de_montagne.php">
                            <img src="images/miel-de-montagne.jpg" class="card-img-top" alt="Miel de montagne">
                        </a>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Miel de Montagne</h5>
                                <span class="badge bg-danger badge-promo">Promo</span>
                            </div>
                            
                            <p class="prix">11,90 €</p>

                            <a href="miel_de_montagne.php" class="btn btn-warning w-100">Acheter</a>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-6">

                    <div class="card produit-card">
                        <a href="">
                            <img src="images/miel-de-romarin.jpg" class="card-img-top" alt="Miel de romarin">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Miel de Romarin</h5>
                            <p class="prix">12,50 €</p>
                            <a href="#" class="btn btn-warning w-100">Acheter</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container mt-5">
            <div class="row text-center">

                <div class="col-md-4 mb-4 avantage">
                    <img src="images/truck.svg" alt="Livraison rapide">
                    <h5 class="mt-3 texte">Livraison rapide</h5>
                    <p class="texte">Expédition sous 24h partout en France.</p>
                </div>

                <div class="col-md-4 mb-4 avantage">
                    <img src="images/flower1.svg" alt="Récolte locale">
                    <h5 class="mt-3 texte">Récolte locale</h5>
                    <p class="texte">Miel récolté à Arles par nos apiculteurs.</p>
                </div>

                <div class="col-md-4 mb-4 avantage">
                    <img src="images/shield-check.svg" alt="100% naturel">
                    <h5 class="mt-3 texte">100% naturel</h5>
                    <p class="texte">Sans additif ni transformation.</p>
                </div>

            </div>
        </div>


    </main>

    <?php include 'include/footer.php' ?>

    <script src="../js/bootstrap.js"></script>

</body>

</html>