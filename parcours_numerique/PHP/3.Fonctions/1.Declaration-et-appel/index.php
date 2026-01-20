<h1> PHP : les fonctions - Déclarations et appel</h1>

<?php
// Une fonction est un bloc de code réutilisable qui éxecute une tache précise. 
// Cela permet d'améliorer la répétition de code et d'améliorer la lisibilité


function direHelloWorld () {
    // code éxecuté ici
    echo " <h2>Hello World ! </h2>";
}

// appel de la fonction

direHelloWorld() ;

/**
 * Règles importante à respecter:
 * le nom d'une fonction doit toujours commencer par une lettre minuscule
 * sensible à la casse, donc par convention (camelCase ou snake_case)
 */

// Entrainement : ecris une fonction saluer() qui affiche "Salut tout le monde !" puis appelle la.

function saluer () {
    echo "Salut tout le monde !" ;
    
}
saluer ();
?>