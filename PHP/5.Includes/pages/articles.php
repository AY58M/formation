<?php require_once("../includes/header.php"); ?>
<h2 class="titre"> Page Articles</h2>

<?php
require_once("../includes/tableauxArticles.php");

// * Tableau des articles
// echo "<pre>" ;
// print_r($listeArticles) ;
// echo "</pre>";

/**
 * <?php ?> écrire du php
 * <?= ?> effectuer un echo en php
 */

?>

<?php foreach ($listeArticles as $article): ?>

  <div class="container-article">
    <article class="article">

      <div class="flexbox">
        <img src="../images/<?= $article["images"] ?>" alt="">
        <div>
          <div class="article-header">
            <h2 class="article-title"><?= $article["titre"] ?></h2>
            <div class="article-meta"><?= $article["categorie"] ?> - <?= $article["dateCreation"] ?></div>
          </div>
          <div class="article-content">
            <p><?= $article["contenu"] ?></p>
          </div>
        </div>
      </div>

            <!-- Liste des commentaires -->

      <?php foreach ($article["avis"] as $avis): ?>
      <article class="article">
        <div class="article-header">
          <div class="article-meta"><?= $avis ["pseudo"] ?> - <?= $avis ["date"] ?></div>
        </div>
        <div class="article-content">
          <p><?= $avis ["contenu"] ?></p>
        </div>
      </article> 
<?php endforeach ?>

    </article>
  </div>
<?php endforeach ?>
<?php require_once("../includes/footer.php"); ?>