<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnages</title>
</head>

<body>

    <form action="" method="POST">
        <input placeholder="name" type="text" name="name">
        <input placeholder="firstname" type="text" name="firstname">
        <input placeholder="job" type="text" name="job">
        <input placeholder="birth (dd/mm/yyyy)" type="text" name="birth">
        <input placeholder="sexe" type="text" name="sexe">
        <input type="submit" value="Send">
    </form>
    <pre>
    <?php

    // var_dump($_GET);
    $perso = $_POST;

    //     $marceau = [
    //         "Name" => "Marceau",
    //         "firstname" => "Julien",
    //         "birth" => "18/10/2000",
    //   "sexe" => "M",
    //         "job" => "professeur"
    //     ];

    //     $dubois = [
    //         "Name" => "Dubois",
    //         "firstname" => "Mathis",
    //         "birth" => "2/3/1995",
    //         "sexe" => "M",
    //         "job" => "chauffeur",
    //     ];

    //     $moreau = [
    //         "Name" => "Moreau",
    //         "firstname" => "corrine",
    //         "birth" => "20/01/1999",
    //         "sexe" => "F",
    //         "job" => "secretaire",
    //     ];

    // $personnages = [
    //     "Marceau" =>  [
    //         "Name" => "Marceau",
    //         "firstname" => "Julien",
    //         "birth" => "18/10/2000",
    //         "sexe" => "M",
    //         "job" => "professeur"
    //     ],
    //     "Dubois" => $dubois,
    //     "Moreau" => $moreau,

    // ];
    // $perso = $personnages["Dubois"];

    if ($perso["sexe"] == 'M') {
        $pronom = "il";
    } elseif ($perso["sexe"] == 'F') {
        $pronom = "elle";
    } else {
        $pronom = "iel";
    }
    $presentation = '';
    $presentation .= ucfirst($pronom);
    $presentation .= " s'appelle " . $perso["name"] . " " . $perso["firstname"];
    $presentation .= ", " . $pronom . " a ";
    // echo $perso ['birth'];
    $birth = DateTime::createFromFormat('d/m/Y', $perso['birth']);
    // var_dump($birth);
    $now = new DateTime();
    // var_dump($now);
    $difference = $now->diff($birth);
    // var_dump($difference);
    $age = $difference->y;
    $presentation .= $age . " ans";
    if ($perso['job'] != "") {
        $presentation .= " et " . $pronom . " est " . $perso["job"];
    }
    $presentation .= ". ";


    echo $presentation;

    ?>
    </pre>
</body>

</html>