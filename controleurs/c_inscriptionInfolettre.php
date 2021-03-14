<?php

/**
 * Gestion de l'inscription à l'infolettre
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
$mail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
if (!empty($mail)) {
    $inscriptionReussie = $pdo->setInscriptionInfolettre($mail);
}
include 'vues/v_inscriptionInfolettre.php';
