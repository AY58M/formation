<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste produits Miel d'Arles</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="miel_darles.css">
</head>

<body class="listing_body">

    <?php include 'include/header.php' ?>
    <main>



        <div class="d-flex justify-content-around bg-warning py-2 categorie-bar">
            <a href="listing_miel_darles.php">Nos Miels</a>
            <a href="#">Produits gourmands</a>
            <a href="#">Bien-être</a>
            <a href="#">Cosmétiques</a>
            <a href="#">Coffrets</a>
            <a href="#">Accessoires</a>
        </div>



        <div class="container mt-5">
            <div class="row align-items-center">

                <div class="col-12 col-md-5 text-center">
                    <img src="images/miel-de-montagne.jpg" class="img-fluid produit-image" alt="Miel de montagne">
                </div>


                <div class="col-12 col-md-7">

                    <h1 class="produit-titre">Miel de Montagne</h1>

                    <p class="produit-prix">11,90 €</p>

                    <p class="produit-description texte">
                        Récolté dans les massifs montagneux de Provence, notre miel de montagne est un miel
                        puissant et parfumé. Il se distingue par ses arômes riches provenant d'une grande
                        diversité de fleurs sauvages. Naturellement crémeux, il accompagne parfaitement
                        les tartines, les yaourts ou les desserts.
                    </p>

                    <p class="texte">
                        <b>100% naturel<br>
                            Récolté artisanalement à Arles<br>
                            Sans additif ni transformation</b>
                    </p>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="" class="btn btn-warning btn-lg mt-3">
                            Acheter ce miel
                        </a>
                        <span class="badge bg-danger badge-promo">Promo</span>
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