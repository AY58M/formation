<?php

/**
 * Cette boucle est parfaite quand on sait à l'avance combien de fois on veut répéter une action
 */

for ($i = 1; $i <= 10; $i++)  {

echo "Le message de boucle<br>";

}

for ($i = 1; $i <= 50; $i++)  {

echo " <h2>Tour de boucle numéro n°$i</h2> <br>";

}



echo "fin de boucle";

/**
 * Décryptage :
 * Chaque instruction est séparée par le ; dans le for (3 instructions)
 * $i = 1 -> Départ
 * $i = <= 100 -> condition pour continuer la boucle
 * $i ++ -> ce qu'on fait à chaque fin de boucle (on incrémente)
 */

?>