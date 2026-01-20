
    <h1>exo</h1>
<?php

$age = 11;

if ($age < 12) {
    echo "accès interdit.";
}
 
elseif ($age <= 17) {
    echo "accès restreint avec accord parentale.";
}

else {

    echo "accès autorisé !";
}

echo "<br>";
echo "<br>";


$age =17;
$majeur=($age>=18)? "Vous êtes majeur":"Vous êtes mineur";
echo $majeur;

echo "<br>";
echo "<br>";


echo "Afficher les nombres pairs de 2 à 20",

$nombre = 2;

while ($nombre <= 20) {
    echo $nombre . "<br>";
    $nombre += 2;
}

echo "<br>";
echo "<br>";


echo "Somme des nombre de 1 à 100.<br>";


$somme = 0;

for ($i = 1; $i <= 100; $i++) {
    $somme += $i;
}

echo "La somme des nombres de 1 à 100 est : " . $somme;

echo "<br>";
echo "<br>";


echo "Table de multiplication de 5.<br>";

$nombre = 5;

for ($i = 1; $i <= 10; $i++) {
    echo "$nombre x $i = " . ($nombre * $i) . "<br>";
}

echo "<br>";
echo "<br>";




?>




