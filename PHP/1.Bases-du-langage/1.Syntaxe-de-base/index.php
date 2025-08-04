<h1>syntaxe de base</h1>
<?php
/**
 * PHP = Hypertext Preprocessor
 * c'est un langage de script coté serveur.
 * A l'inverse de l'html, il est invisible dans le navigateur
 * 
 */

echo "Hello World !"; // echo => afficher du contenu

/**
 * 4 régles de syntaxe à respecter:
 * - écrire le code php dans les balises php <?php (code ici) ?>
 * - ; à la fin de la ligne (obligatoire) = fin d'instruction
 * - TRES sensible à la casse (respecter les majuscules, minuscules, ...)
 * - espaces blancs (pas obligatoires mais pour plus de lisibilité)
 */

?>

<!-- On peut faire de l'html classique en dehors des balise PHP -->
<h1>Bienvenu dans le PHP</h1>

<?php
echo "Mon site est trop génial<br>";
echo "Je m'appelle Mohammed.";
echo "<p>Une balise paragraphe en PHP</p>";
?>

<p>
<?php
echo "Du texte dans le paragraphe"
?>
</p>
