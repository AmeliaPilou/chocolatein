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
 * @link      https://chocolatein.gil83.fr Contexte « Chocolate'In »
 */
?>
        </div>
        <footer class="bg-light pt-2 border-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                        <p class="font-italic mb-0">Des chocolats artisanaux de qualité exceptionnelle à Bordeaux ! Tout le chocolat que nous vendons est 100% pur beurre de cacao et à la vanille naturelle.</p>
                        <p class="text-center"><a href="https://www.biopartenaire.com/le-label-biopartenaire/" target="_blank"><img class="img-responsive" src="./vues/images/label_bio-partenaire.png" alt="Label bio partenaire équitable et solidaire"></a></p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <h5>Nos catégories</h5>
                        <hr>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="?uc=gamme&nom=produits_de_saison"><i class="fas fa-calendar-alt"></i> Produits de saison</a></li>
                            <li class="mb-2"><a href="?uc=gamme&nom=chocolats"><i class="fas fa-box-open"></i> Chocolats / Assortiments</a></li>
                            <li class="mb-2"><a href="?uc=gamme&nom=confiseries"><i class="fas fa-candy-cane"></i> Confiseries</a></li>
                            <li class="mb-2"><a href="?uc=gamme&nom=dragees"><i class="fas fa-shopping-bag"></i> Dragées et cadeaux invités</a></li>
                            <li class="mb-2"><a href="?uc=gamme&nom=idees_cadeaux"><i class="fas fa-gifts"></i> Idées cadeaux</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0">
                        <h5>Infolettre</h5>
                        <hr>
                        <p class="mb-4">Abonnez-vous à notre infolettre pour être toujours informé(e) de nos dernières nouveautés ! Notre lettre d'informations est envoyée environ une fois par mois.</p>
                        <div class="p-1 rounded border">
                            <form class="input-group" action="?uc=inscriptionInfolettre" method="post">
                                <input name="email" type="email" placeholder="Saisir votre adresse de courriel" aria-describedby="infolettre" class="form-control border-0 shadow-0" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,}$">
                                <div class="input-group-append">
                                    <button id="infolettre" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
                                </div>
                                <div class="invalid-feedback text-center">Veuillez saisir un email valide.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container text-center">
                    <p class="mb-0"><a href="?uc=cgu"><i class="fa fa-file-contract"></i> Consulter nos Conditions Générales d'Utilisation</a></p>  
                    <hr class="copyrights">
                    <p class="mb-0">&copy;2015-2021 Chocolate'in - Créé par José GIL - Tous droits réservés</p>
                    <p class="mb-0"><small>Depuis 2015, retrouvez nous au <a href="?uc=acces">1 place du Parlement à Bordeaux</a></small></p>
                    <p class="pb-2"><small>N'hésitez pas à nous appeler au <a href="tel:+33512345678"><i class="fas fa-phone-square-alt"></i> 05 12 34 56 78</a></small></p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Intégration de la libraire jQuery -->
    <script src="./vues/css/boostrap/js/jquery-3.5.1.slim.min.js"></script>
    <!-- Intégration de la libraire de composants du Bootstrap -->
    <script src="./vues/css/boostrap/js/bootstrap.bundle.min.js"></script>
    <!-- Validation de formulaires -->
    <script src="./vues/js/valid-form.js"></script>
</body>
</html>