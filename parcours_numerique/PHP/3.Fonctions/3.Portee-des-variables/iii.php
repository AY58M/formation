DEMONTRER L UTILISATION DU MOT CLE GLOBAL
<?php

$compteur = 0;


function increment1() {
    global $compteur;
    $compteur += 1;
    echo $compteur."<br>";
}



function increment3() {
    global $compteur;
    $compteur += 3;
    echo $compteur."<br>";
}

echo "Compteur initial : $compteur<br>";

increment1();
increment3();
increment3();
increment1();
increment1();

?>``