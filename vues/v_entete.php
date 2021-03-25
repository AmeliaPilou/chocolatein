<?php
/**
 * Vue Entête
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
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="José GIL">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Chocolat'in - Chocolats et confiseries à Bordeaux</title>
        <meta name="description" content="Des chocolats artisanaux de qualité exceptionnelle à Bordeaux ! Tout le chocolat que nous vendons est 100% pur beurre de cacao et à la vanille naturelle.">
        <!-- Intégration du CSS Bootstrap -->
        <link href="./vues/css/boostrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Intégration du CSS Font Awesome -->
        <link href="./vues/css/fontawesome/css/all.min.css" rel="stylesheet">
        <!-- Intégration du CSS perso -->
        <link href="./vues/css/styles.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "Place",
            "geo": {
            "@type": "GeoCoordinates",
            "latitude": "44.840709",
            "longitude": "-0.572033"
            },
            "name": "Chocolate'In",
            "description": "Chocolaterie et confiserie à Bordeaux",
            "image": "https://chocolatein.gil83.fr/vues/images/vitrine_noel.jpg"
            }
        </script>
    </head>
    <body>
        <!-- Conteneur principal -->
        <div class="container min-vh-100 d-flex flex-column">
            <!-- Bannière -->
            <header>
                <a href="./index.php">
                    <img src="vues/images/header_300w.jpg" class="img-responsive" srcset="vues/images/header_300w.jpg 300w, vues/images/header_600w.jpg 600w, vues/images/header.jpg 1200w" alt="Bannière de Chocolate'in" sizes="(min-width: 1200px) 1200px, (min-width: 600px) 600px,300px">
                </a>
            </header>
            <!-- Barre de navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarChoc" aria-controls="navBarChoc" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navBarChoc">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="?uc=accueil"><i class="fas fa-home"></i> Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownChoc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-tags"></i> Gamme</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownChoc">
                                <a class="dropdown-item" href="?uc=gamme&nom=produits_de_saison"><i class="fas fa-calendar-alt"></i> Produits de saison</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?uc=gamme&nom=chocolats"><i class="fas fa-box-open"></i> Chocolats / Assortiments</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?uc=gamme&nom=confiseries"><i class="fas fa-candy-cane"></i> Confiseries</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?uc=gamme&nom=dragees"><i class="fas fa-shopping-bag"></i> Dragées et cadeaux invités</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?uc=gamme&nom=idees_cadeaux"><i class="fas fa-gifts"></i> Idées cadeaux</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?uc=horaires"><i class="fas fa-clock"></i> Horaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?uc=acces"><i class="fas fa-map-marked-alt"></i> Plan d'accès</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?uc=contact"><i class="fas fa-address-card"></i> Nous contacter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/Chocolate.In.Bordeaux" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a>
                        </li>
                    </ul>
                    <form class="form-inline mr-2 rounded border" method="get">
                        <input name="uc" type="hidden" value="recherche">
                        <input name="recherche" type="text" placeholder="Recherche" aria-describedby="infolettre" class="form-control border-0 shadow-0">
                        <button type="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </nav>
            <!-- Contenu qui occupe au minimum toute la place restant sur un écran -->
            <div class="container flex-grow-1">
