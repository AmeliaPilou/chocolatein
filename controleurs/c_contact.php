<?php

/**
 * Gestion de l'affichage du formulaire de contact
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
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$personne = filter_input(INPUT_POST, 'ident', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$statut = filter_input(INPUT_POST, 'statut', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$mail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$site = filter_input(INPUT_POST, 'site', FILTER_SANITIZE_URL);
$message = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if (!empty($action)) {
    if ($action === "envoiContact") {
        $envoiReussi = $pdo->setLeContact($personne, $statut, $mail, $tel, $ville, $site, $message);
    }
}
include 'vues/v_contact.php';
