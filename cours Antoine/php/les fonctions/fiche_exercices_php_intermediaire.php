<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th,
        td {
            padding: 10px 15px;
            text-align: left;
        }

        th {
            background-color: #2c2a1d;
            color: #fff;
        }

       
    </style>

</head>

<body>
    <?php

    echo "<h3>Exercice 1 :</h3>";
    $commandes = [
        ["id" => 1, "client" => "Alice", "total" => 120, "statut" => "payee"],
        ["id" => 2, "client" => "Bob", "total" => 75, "statut" => "en_attente"],
        ["id" => 3, "client" => "Charlie", "total" => 220, "statut" => "payee"],
        ["id" => 4, "client" => "Diane", "total" => 40, "statut" => "annulee"],
        ["id" => 5, "client" => "Evan", "total" => 310, "statut" => "payee"],
        ["id" => 6, "client" => "Fatima", "total" => 95, "statut" => "payee"],
        ["id" => 7, "client" => "Gaspard", "total" => 0, "statut" => "payee"],
        ["id" => 8, "client" => "Hugo", "total" => 180, "statut" => "en_attente"],
        ["id" => 9, "client" => "Ines", "total" => 560, "statut" => "payee"],
        ["id" => 10, "client" => "Jules", "total" => 15, "statut" => "annulee"],
        ["id" => 11, "client" => "Karim", "total" => 89, "statut" => "payee"],
        ["id" => 12, "client" => "Lea", "total" => 145, "statut" => "payee"],
        ["id" => 13, "client" => "Mehdi", "total" => 230, "statut" => "payee"],
        ["id" => 14, "client" => "Nina", "total" => 60, "statut" => "en_attente"],
        ["id" => 15, "client" => "Omar", "total" => 410, "statut" => "payee"],
    ];

    echo "<b> Les commandes payées :</b>" . "</br>";
    foreach ($commandes as $commande) {

        if ($commande["statut"] == "payee") {
            echo $commande['client'] . " : " . $commande['total'] . " € " . "<br>";
        }
    }

    echo "<br>";

    echo "<b>Le chiffre d'affaire total :</b>" . "<br>";


    $chiffreAffaire = 0;

    foreach ($commandes as $commande) {
        if ($commande["statut"] == "payee") {
            $chiffreAffaire += $commande["total"];
        }
    }

    echo "Le chiffre d'affaires total est : $chiffreAffaire €" . "<br>";

    echo "<br>";

    echo "<b>Les commandes importantes (>100) :</b>" . "<br>";

    foreach ($commandes as $commande) {

        if ($commande["total"] > 100) {
            echo $commande['client'] . " : " . $commande['total'] . " € " . "<br>";
        }
    }

    echo "<h3>Exercice 2 – Fonction de statut :</h3>";

    function statutCommande(array $commande): string
    {
        if ($commande['statut'] === 'payee') {
            if ($commande['total'] >= 100) {
                return 'VIP';
            }
            return 'OK';
        }
        if ($commande['statut'] === 'en_attente') {
            return 'Bloquée';
        }
        if ($commande['statut'] === 'annulee') {
            return 'Annulée';
        }
        return 'Statut inconnu';
    }

    foreach ($commandes as $commande) {

        $etat = statutCommande($commande);
        echo $commande['client'] . " - " . $commande['total'] . " €  : " . $etat;
        echo "<br>";
    }

    echo "<h3>Exercice 3 – Fonctions de calcul :</h3>";

    function totalCommandes(array $commandes): float
    {
        $total = 0;

        foreach ($commandes as $commande) {
            if ($commande['statut'] !== 'payee') {
                continue;
            }

            if ($commande['total'] <= 0) {
                continue;
            }

            $total += $commande['total'];
        }

        return $total;
    }

    echo "Le montant total des commandes payées est : " . totalCommandes($commandes) . " €";

    echo "<h3>Exercice 4 – Statistiques globales :</h3>";

    function statistiquesParStatut(array $commandes): array
    {
        $stats = [];

        foreach ($commandes as $commande) {

            $statut = statutCommande($commande);

            if (!isset($stats[$statut])) {
                $stats[$statut] = [
                    'nombre' => 0,
                    'total' => 0,
                    'panier_moyen' => 0
                ];
            }

            $stats[$statut]['nombre']++;

            if ($commande['total'] > 0) {
                $stats[$statut]['total'] += $commande['total'];
            }
        }

        foreach ($stats as $statut => &$data) {
            if ($data['nombre'] > 0) {
                $data['panier_moyen'] = $data['total'] / $data['nombre'];
            }
        }

        return $stats;
    }

    $stats = statistiquesParStatut($commandes);

    ?>

    <table border="2">

        <tr>
            <th>Statut</th>
            <th>Nombre de commandes</th>
            <th>Total</th>
            <th>Panier moyen</th>
        </tr>

        <?php foreach ($stats as $statut => $data): ?>
            <tr>
                <td><?= htmlspecialchars($statut) ?></td>
                <td><?= $data['nombre'] ?></td>
                <td><?= number_format($data['total'], 2) ?> €</td>
                <td><?= number_format($data['panier_moyen'], 2) ?> €</td>
            </tr>
        <?php endforeach; ?>

    </table>



</body>

</html>