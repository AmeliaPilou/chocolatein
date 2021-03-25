<?php
/**
 * Gestion de l'affichage des résultats de recherche
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
$recherche = filter_input(INPUT_GET, 'recherche', FILTER_SANITIZE_STRING);
$lesProduits = $pdo->getListeProduits($recherche);
$title = "Recherche : " . $recherche;
include './vues/v_listeProduits.php';