<h1>PHP : Les fonctions - Parametres et valeurs</h1>

<?php
// Un paramètre est une valeur qu'on donne à une fonction pour qu'elle s'en serve

function direBonjour ($prenom) {
    echo "Bonjour $prenom ! <br>";
}

$nom = "Béatrice";
direBonjour ("Quentin");

direBonjour("Ben");

direBonjour($nom);

// fonction simple avec plusieurs paramètres

function sePresenter ($prenom, $nom, $age) {

    echo "Je m'appele $prenom $nom et j'ai $age ans<br>";

}

    sePresenter ("Mohammed", "Elf", 50);

    // Indiquer une valeur par défaut à la fonction

function direBonjour2 ($prenom = "invité") {
    echo "Bonjour $prenom ! <br>";
}

direBonjour2();
direBonjour2("aurore");

?>