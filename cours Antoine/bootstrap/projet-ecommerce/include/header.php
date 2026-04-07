<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Miel d'Arles</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../miel_darles.css">
</head>

<body class="home_body">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">

                <a href="miel_darles_accueil.php"><img src="images/logo_miel_darles.png" width="70px"
                        class="img-fluid me-3" alt="Logo Miel d'Arles"></a>


                <form class="d-flex mx-3 flex-grow-1" role="search">
                    <input class="form-control me-2" type="search" placeholder="Chercher un produit">
                    <button class="btn btn-light" type="submit"><img src="images/search.svg" alt="search"></button>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="menu">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link" href="miel_darles_accueil.php">Accueil</a>
                        </li>
                        <li>
                            <a class="nav-link" href="listing_miel_darles.php">Nos Miels</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Nouveautés</a>
                        </li>
                        <li>
                            <a class="nav-link" href="miel_de_montagne.php">
                                <span class="badge bg-danger">Promos</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <script src="../../js/bootstrap.js"></script>
</body>

</html>