<?php
/**
 * Vue affichant un produit dans un id donné
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
        <li class="breadcrumb-item"><a href="?uc=gamme&nom=<?= $idGamme ?>"><?= $laGamme ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
    </ol>
</nav>
<article class="row my-2">
    <?php
    //$idPdt = $leProduit['id'];
    $urlImgPdt = $leProduit['urlimg'];
    $nomPdt = $leProduit['nom'];
    $packagingPdt = $leProduit['packaging'];
    $descriptionPdt = $leProduit['description'];
    ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?= $nomPdt ?> <small class="annotation"><?= $packagingPdt ?></small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <img class="img-fluid" src="<?= $urlImgPdt ?>_750w.jpg" alt="<?= $nomPdt ?>">
        </div>
        <div class="col-md-4">
            <h3>Description</h3>
            <p><?= $descriptionPdt ?></p>
            <?php
            if (!empty($lesDetailsProduit)) {
                ?>
                <h3>Détails</h3>
                <ul>
                    <?php
                    foreach ($lesDetailsProduit as $unDetail) {
                        ?>
                        <li><?= $unDetail ?></li>
                        <?php
                    }
                    ?>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
</article>
