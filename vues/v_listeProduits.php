<?php
/**
 * Vue affichant la liste des produits dans une gamme donnée
 *
 * PHP Version 7
 *
 * @category  B13
 * @package   ChocolateIn
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2020 José GIL
 * @license   José GIL
 * @version   GIT: <0>
 * @link      https://chocolatein.gil83.fr Contexte « Chocolate'in »
 */
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent px-0">
        <li class="breadcrumb-item"><a href="?uc=accueil"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="?uc=gamme">Gamme</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
    </ol>
</nav>
<h1><?= $title ?></h1>
<section class="row">
    <?php
    foreach ($lesProduits as $unProduit) {
        $idPdt = $unProduit['id'];
        $urlImgPdt = $unProduit['urlimg'];
        $nomPdt = $unProduit['nom'];
        $packagingPdt = $unProduit['packaging'];
        $descriptionPdt = $unProduit['description'];
        ?>
        <article class="card col-md-3 p-2">
            <div class="card col border-choc">
                <img src="<?= $urlImgPdt ?>_300w.jpg" class="card-img-top mt-2" alt="<?= $nomPdt ?>">
                <div class="card-body py-0">
                    <small class="text-muted"><?= $packagingPdt ?></small>
                    <h5 class="card-title mb-0"><?= $nomPdt ?></h5>
                    <small class="card-text"><?= $descriptionPdt ?></small>
                </div>
                <small class="card-body py-0">
                    <a href="?uc=produit&produit=<?= $idPdt ?><?php if (isset($recherche)) { echo "&recherche=".$recherche; } ?>" class="btn btn-choc mb-2 p-1">Plus d'infos</a>
                </small>
            </div>
        </article>
        <?php
    }
    ?>
</section>
