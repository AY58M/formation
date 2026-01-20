<h1>PHP : do_while</h1>
<?php

/**
 * La seule différence avec while, c'est que le code exécuté dans notre boucle s'exécute une première fois avant de tester la condition
 */

echo "Début de boucle<br>";
$i = 200;

do {

    echo " <h2>Tour de boucle numéro n°$i</h2>"; $i++;
    // !attention aux boucles infinies, ne pas oublier l'incrémentation


} 
while ($i <= 100);

echo "Fin de boucle <br>";

?>