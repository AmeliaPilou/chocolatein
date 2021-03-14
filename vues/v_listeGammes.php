<?php
/**
 * Vue affichant la liste des gammes
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
    </ol>
</nav>
<h1>Les gammes</h1>
<section class="row">
    <div class="card">
        <ul class="list-group list-group-flush">
            <?php
            foreach ($lesGammes as $uneGamme) {
                $idGamme = $uneGamme['id'];
                $libelleGamme = $uneGamme['libelle'];
                $pictoGamme = $uneGamme['picto'];
                ?>
            <li class="navbar list-group-item"><a class="navbar-brand dropdown-item" href="?uc=gamme&nom=<?= $idGamme ?>"><i class="fas fa-<?= $pictoGamme ?>"></i> <?= $libelleGamme ?></a></li>
                    <?php
                }
                ?>
        </ul>
    </div>
</section>