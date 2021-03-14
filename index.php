<?php

require_once './modele/class.pdochoc.inc.php';
$pdo = PdoChoc::getPdoChoc();
require './vues/v_entete.php';
$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);
if (empty($uc)) {
    $uc = 'accueil';
}
switch ($uc) {
    case 'accueil':
        include './controleurs/c_accueil.php';
        break;
    case 'gamme':
        include './controleurs/c_gamme.php';
        break;
    case 'produit':
        include './controleurs/c_produit.php';
        break;
    case 'horaires':
        include './controleurs/c_horaires.php';
        break;
    case 'acces':
        include './controleurs/c_acces.php';
        break;
    case 'contact':
        include './controleurs/c_contact.php';
        break;
    case 'cgu':
        include './controleurs/c_cgu.php';
        break;
    case 'inscriptionInfolettre':
        include './controleurs/c_inscriptionInfolettre.php';
        break;
    default:
        include './controleurs/c_404.php';
}
require './vues/v_pied.php';
