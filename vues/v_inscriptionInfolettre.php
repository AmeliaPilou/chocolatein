<?php
/**
 * Vue Inscription à l'infolettre
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
<section class="row mt-2">
    <h1 class="col-md-12">Inscription à l'infolettre de Chocolate'In</h1>
    <?php
    if (isset($inscriptionReussie)) {
        if ($inscriptionReussie) {
            ?>
            <div class="alert alert-success col-12" role="alert">
                Nous avons bien reçu votre demande d’inscription à notre infolettre et nous vous en remercions.
                <br><br>Un message va prochainement être envoyé à votre adresse de courriel.
                <br><br>Votre inscription ne sera effective qu’après avoir cliqué sur le lien contenu dans ce courriel.
                <br><br>Merci et à bientôt !
                <br>L'équipe de Chocolate'In
            </div>
            <?php
        } else {
            ?>
            <div class="alert alert-danger col-12" role="alert">
                Une erreur s'est produite lors de l'inscription. Merci de rééssayer dans quelques instants...
            </div>
            <?php
        }
    } else {
        ?>
        <div class="alert alert-primary col-12" role="alert">
            Si vous souhaitez vous inscrire notre infolettre, saisissez votre adresse de courriel dans le pied de page.
        </div>
        <?php
    }
    ?>
</section>