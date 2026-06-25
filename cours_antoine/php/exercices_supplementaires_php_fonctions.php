
<?php
echo "Exercice 1 - Fonction avec typage et controle <br>";

function direBonjour($prenom){
    if($prenom == "")  {
        return "Bonjour invité";
    }
    return "Bonjour " . $prenom;
}
echo direBonjour("") . "<br>";

echo "Exercice 2 - Fonction de calcule avec valeur par défaut <br>";

function calculerPrixTTC($prixHT, $taux_TVA = 20){
    $prixTTC = $prixHT * (1+$taux_TVA/100);
    return round ($prixTTC,2);
}
echo calculerPrixTTC(66, 3.3). "<br>";

echo "Exercice 3 - Fonction de validation <br>";

function estEmailValide($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        return True;
    }
    else {
        return False;
    }
}

var_dump(estEmailValide('contact.site.fr'));

echo "Exercice 4 - Fonction et tableau associatif <br>";

$person = ['julie', '1989'];

function calculerAge($anneeNaissance) {
     $anneeCourante = date('Y');
     return $anneeCourante - $anneeNaissance;
}

echo calculerAge(1989). "<br>";

echo "Exercice 5 - Fonction qui transforme un tableau <br>";



function appliquerReduction ($prix, $reduction){
    $prixReduit = [];
    foreach ($prix as $prix){
        $prixReduit[] = $prix * (1-$reduction/100);
    }

    return $prixReduit;

}

print_r(appliquerReduction([10,20],10));




?>