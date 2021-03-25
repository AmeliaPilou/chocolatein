<?php

/**
 * Gestion de l'affichage d'un produit
 *
 * PHP Version 7
 *
 * @category  B13
 * @package   ChocolateIn
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2020 José GIL
 * @license   José GIL
 * @version   GIT: <0>
 * @link      https://chocolatein.gil83.fr Contexte « Chocolate'In »
 */
$produit = filter_input(INPUT_GET, 'produit', FILTER_SANITIZE_STRING);
$recherche = filter_input(INPUT_GET, 'recherche', FILTER_SANITIZE_STRING);
if (empty($recherche)) {
    unset($recherche);
}
$lesIdProduits = $pdo->getLesIdProduit();
if (in_array($produit, $lesIdProduits)) {
    $leProduit = $pdo->getLeProduit($produit);
    $idGamme = $leProduit['idgamme'];
    $laGamme = $pdo->getLeLibelleGamme($idGamme);
    $title = $leProduit['nom'];
    $lesDetailsProduit = $pdo->getLesDetailsProduit($produit);
    include './vues/v_unProduit.php';
} else {
    include './controleurs/c_404.php';
}