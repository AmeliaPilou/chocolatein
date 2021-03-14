<?php

/**
 * Gestion de l'affichage des gammes
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
$nom = filter_input(INPUT_GET, 'nom', FILTER_SANITIZE_STRING);
if (empty($nom)) {
    $nom = 'toutes';
}
$lesIdGammes = $pdo->getLesIdGamme();
if (in_array($nom, $lesIdGammes) || $nom === 'toutes') {
    if ($nom === 'toutes') {
        $lesGammes = $pdo->getLesGammes();
        include './vues/v_listeGammes.php';
    } else {
        $lesProduits = $pdo->getLesProduits($nom);
        $title = $pdo->getLeLibelleGamme($nom);
        include './vues/v_listeProduits.php';
    }
} else {
    include './controleurs/c_404.php';
}