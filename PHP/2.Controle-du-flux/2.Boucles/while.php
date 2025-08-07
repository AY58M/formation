<h1>PHP : La boucle while</h1>

<?php


// for ($i = 1; $i <= 50; $i++)  {

// echo " <h2>Tour de boucle numéro n°$i</h2> <br>";

// }

$i = 1;

while ($i <= 100) {

    echo " <h2>Tour de boucle numéro n°$i</h2>"; $i++;

}

echo "Fin de boucle <br>";

/**
 * TODO à retenir:
 * On initialise une variable ($i = 1)
 * On vérifie une condition ($i <= 100)
 * On fait une action à chaque tour de boucle (echo)
 * On incrémente $i pour éviter les boucles infinies ($i++)
 */

?>